<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\UpgradeGraphRequest;
use App\Import\GraphImport;
use App\Models\MainGraph;
use App\Models\PortfolioGraph;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    const CACHE_TIME_EXCEL = 10; // in minutes
    const DATE_REGEX = '/^\\d{4}-\\d{2}-\\d{2}@12:00$/';

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
            return response()->json(['message' => __('dashboard.statistics.empty'),
                'code' => 403
            ], 403);
        }

        if ($isPreview) {
            return response()->json($points);
        }

        try {
            DB::beginTransaction();

            MainGraph::insert($points);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'message' => __('dashboard.statistics.transaction_fail'),
                'code' => 403
            ], 403);
        }

        return response()->json($points);
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
            return response()->json(['message' => __('dashboard.statistics.empty'),
                'code' => 403
            ], 403);
        }

        if ($isPreview) {
            return response()->json($points);
        }

        try {
            DB::beginTransaction();

            // TODO insert OR update if exists
            //PortfolioGraph::insert($points);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'message' => __('dashboard.statistics.transaction_fail'),
                'code' => 403
            ], 403);
        }

        return response()->json($points);
    }

    protected function filterPortfolioGraphPoints($rows = null)
    {
        if ($rows === null) {
            return null;
        }

        $existsData = PortfolioGraph::all();

        if ($existsData->isNotEmpty()) {
            // TODO вынести непересекающие элементы в отдельный массив
            // TODO сделать insert этих элементов
            // TODO остальные проапдейтить

            foreach ($points as $key => $value) {
                if (in_array($value->id, $unique)) {
                    $doubles[] = $value;
                    unset($array[$key]);
                } else {
                    $unique[] = $value->id;
                }
            }


            // TODO implement
        }
    }

    protected function filterMainGraphPoints($rows = null)
    {
        if ($rows === null) {
            return null;
        }

        $points = [];
        $filteredRows = array_filter($rows, [$this, 'at_12_time']);

        foreach ($filteredRows as $row) {
            $graphPoint = new MainGraph();

            $graphPoint->setDate(substr($row->date, 0, 10));
            $graphPoint->setUSD((float)substr($row->usd, 1, \strlen($row->usd)));
            $graphPoint->setBTC((float)$row->btc);

            $points[] = $graphPoint->toArray();
        }

        return $points;
    }

    private function at_12_time($row)
    {
        return preg_match(self::DATE_REGEX, $row->date);
    }
}
