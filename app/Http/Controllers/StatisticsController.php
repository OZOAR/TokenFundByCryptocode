<?php

namespace App\Http\Controllers;

use App\Models\MainGraph;
use App\Models\PortfolioGraph;
use App\Models\ProfileGraph;

class StatisticsController extends Controller
{
    const GRAPH_POINTS_LIMIT = 10;

    /**
     * Get main graph points.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMainGraph()
    {
        $points = MainGraph::orderBy('date')
            ->limit(self::GRAPH_POINTS_LIMIT)
            ->get();

        return response()->json($points);
    }

    /**
     * Get portfolio graph points.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPortfolioGraph()
    {
        $points = PortfolioGraph::all();

        return response()->json($points);
    }

    public function getProfileStatistics()
    {
        $profilePoint = new ProfileGraph();
        $profilePoint->setUSD(0.003);
        $profilePoint->setDate(\Carbon\Carbon::now()->toDateTimeString());

        $points = [
            $profilePoint,
            $profilePoint
        ];

        return response()->json($points);
    }
}
