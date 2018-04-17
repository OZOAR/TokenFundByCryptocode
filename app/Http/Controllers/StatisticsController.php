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

        return response()->json($this->transformed($points));
    }

    public function getProfileStatistics()
    {
        $profilePoint = new ProfileGraph();
        $profilePoint->setUSD(0.2);
        $profilePoint->setDate(\Carbon\Carbon::now()->toDateTimeString());

        $profilePoint_2 = new ProfileGraph();
        $profilePoint_2->setUSD(0.5);
        $profilePoint_2->setDate(\Carbon\Carbon::now()->toDateTimeString());

        $points = [
            $profilePoint,
            $profilePoint_2
        ];

        return response()->json($points);
    }

    private function transformed($items)
    {
        return $items->transform(function ($item) {
            return [
                'id' => $item->id,
                'asset' => $item->asset,
                'ticket' => $item->ticket,
                'balance' => $item->balance,
                'usd' => $item->usd,
                'y' => $item->quota,
            ];
        });
    }
}
