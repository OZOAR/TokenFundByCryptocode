<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ClientProfileController extends Controller
{
    /**
     * Show user profile
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showProfile()
    {
        $title = __('profile.title');
        $client = Auth::user();

        return view('profile.show')->with(compact(['client', 'title']));
    }
}
