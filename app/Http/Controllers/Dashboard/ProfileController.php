<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function showProfile() {
        return view('dashboard.profile.index');
    }
}
