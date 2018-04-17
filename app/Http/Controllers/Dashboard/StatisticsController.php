<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\UpgradeGraphRequest;
use App\Import\GraphImport;
use App\Models\MainGraph;
use App\Models\PortfolioGraph;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    const CACHE_TIME_EXCEL = 10; // in minutes
    const DATE_REGEX = '/^\\d{4}-\\d{2}-\\d{2}@12:00$/';

    const INSERT_POINTS = 'insert';
    const UPDATE_POINTS = 'update';

    public function showStatisticsPage()
    {
        return view('dashboard.statistics.index');
    }

    /**
     * Upgrade main graph with preview mode or without.
     *
     * @param UpgradeGraphRequest $request
     * @param GraphImport $import
     * @return \Illuminate\Http\JsonResponse
     */
    public function upgradeMainGraph(UpgradeGraphRequest $request, GraphImport $import)
    {
        // TODO add ORDER BY date
        // TODO retrieve only by last week
        $isPreview = (bool)$request->input('is-preview');

        $sheet = $import->remember(self::CACHE_TIME_EXCEL)->first(); // first sheet
        $points = $this->filterMainGraphPoints($sheet->all());

        if ($points === null) {
            return response()->json([
                'success' => false,
                'message' => __('dashboard.statistics.empty'),
            ], 403);
        }

        // TODO fix
        //       if ($isPreview) {
        //           return response()->json(['success' => true, 'points' => $points]);
        //       }

        try {
            DB::beginTransaction();

            MainGraph::insert($points);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => __('dashboard.statistics.transaction_fail'),
            ], 403);
        }

        // TODO send message
        return redirect()->back();
        // return response()->json(['success' => true, 'points' => $points]);
    }

    /**
     * Upgrade portfolio graph with preview mode or without.
     *
     * @param UpgradeGraphRequest $request
     * @param GraphImport $import
     * @return \Illuminate\Http\JsonResponse
     */
    public function upgradePortfolioGraph(UpgradeGraphRequest $request, GraphImport $import)
    {
        // TODO add ORDER BY date
        // TODO retrieve only by last week
        $isPreview = (bool)$request->input('is-preview');

        $sheet = $import->remember(self::CACHE_TIME_EXCEL)->first(); // first sheet
        $points = $this->filterPortfolioGraphPoints($sheet->all());

        if ($points === null) {
            return response()->json([
                'success' => false,
                'message' => __('dashboard.statistics.empty'),
            ], 403);
        }

        // TODO fix
//        if ($isPreview) {
//            return response()->json(['success' => true, 'points' => $this->transformed($points[])]);
//        }

        try {
            DB::beginTransaction();

            if(Arr::exists($points, self::INSERT_POINTS)) {
                PortfolioGraph::insert($points[self::INSERT_POINTS]);
            }

            if(Arr::exists($points, self::UPDATE_POINTS)) {
                $this->updatePortfolioGraphPoints($points[self::UPDATE_POINTS]);
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => __('dashboard.statistics.transaction_fail'),
            ], 403);
        }

        // TODO send message
        return redirect()->back();
        // return response()->json(['success' => true, 'points' => $this->transformed($points)]);
    }

    protected function updatePortfolioGraphPoints($points)
    {
        foreach ($points as $point) {
            $point->save();
        }
    }

    protected function filterPortfolioGraphPoints($rows)
    {
        $newPortfolioPoints = [];

        if ($rows === null) {
            return null;
        }

        $collectedRows = collect($rows);
        $portfolioPoints = PortfolioGraph::all();

        if ($portfolioPoints->isNotEmpty()) {
            $updatePoints = $portfolioPoints->reject(function ($point) use ($collectedRows) {
                return $collectedRows->firstWhere('ticket', '==', $point->getTicket()) === null;
            });

            foreach ($updatePoints as $item) {
                $data = $collectedRows->firstWhere('ticket', '==', $item->getTicket());
                $this->fillPortfolioGraphRow($data, $item);
            }

            foreach ($updatePoints as $point) {
                $newPortfolioPoints[self::UPDATE_POINTS][] = $point;
            }

            $createPoints = $collectedRows->reject(function ($point) use ($portfolioPoints) {
                return $portfolioPoints->firstWhere('ticket', '==', $point->ticket);
            });

            foreach ($createPoints as $row) {
                $portfolioGraph = $this->fillPortfolioGraphRow($row);
                $newPortfolioPoints[self::INSERT_POINTS][] = $portfolioGraph->toArray();
            }
        } else {
            foreach ($rows as $row) {
                $portfolioGraph = $this->fillPortfolioGraphRow($row);
                $newPortfolioPoints[self::INSERT_POINTS][] = $portfolioGraph->toArray();
            }
        }

        return $newPortfolioPoints;
    }

    protected function filterMainGraphPoints($rows)
    {
        if ($rows === null) {
            return null;
        }

        $points = [];
        $filteredRows = array_filter($rows, [$this, 'at_12_time']);

        foreach ($filteredRows as $row) {
            $graphPoint = $this->fillMainGraphRow($row);
            $points[] = $graphPoint->toArray();
        }

        return $points;
    }

    private function fillMainGraphRow($row)
    {
        $graphPoint = new MainGraph();

        $graphPoint->setDate(substr($row->date, 0, 10));
        $graphPoint->setUSD((float)substr($row->usd, 1, \strlen($row->usd)));
        $graphPoint->setBTC((float)$row->btc);

        return $graphPoint;
    }

    private function fillPortfolioGraphRow($row, $item = null)
    {
        $portfolioGraph = $item === null ? new PortfolioGraph() : $item;

        $portfolioGraph->setAsset($row->asset);
        $portfolioGraph->setTicket($row->ticket);

        $balance = str_replace(',', '', $row->balance);
        $portfolioGraph->setBalance((float)$balance);

        $usd = str_replace([',', '$'], '', $row->usd);
        $portfolioGraph->setUSD((float)$usd);

        $portfolioGraph->setQuota((float)str_replace('%', '', $row->quota));

        return $portfolioGraph;
    }

    private function at_12_time($row)
    {
        return preg_match(self::DATE_REGEX, $row->date);
    }
}
