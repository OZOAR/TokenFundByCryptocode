<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class StatisticsController extends Controller
{
    public function showStatisticsPage()
    {
        return view('dashboard.statistics.index');
    }
}
