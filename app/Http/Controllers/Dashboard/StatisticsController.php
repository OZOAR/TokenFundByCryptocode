<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\UpgradeFirstGraphRequest;
use App\Import\GraphImport;
use App\Models\MainGraph;
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
     * @param UpgradeFirstGraphRequest $request
     * @param GraphImport $import
     * @return \Illuminate\Http\JsonResponse
     */
    public function upgradeFirstGraph(UpgradeFirstGraphRequest $request, GraphImport $import)
    {
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
