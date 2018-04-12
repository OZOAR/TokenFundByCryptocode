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
        return view('welcome');
    }
}
