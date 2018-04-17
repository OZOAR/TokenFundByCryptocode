<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Show welcome page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showIndexPage()
    {
        $title = config('app.name', 'vidInvest');
        $tokenUSDPrice = '$'.'469'; // TODO change from DB
        $tokenBTCPrice = 'Ƀ'.'748'; // TODO change from DB
        $fundsYields = '693.86'.'%'; // TODO change from DB

        return view('welcome')->with(compact(['title', 'tokenUSDPrice', 'tokenBTCPrice', 'fundsYields']));
    }
}
