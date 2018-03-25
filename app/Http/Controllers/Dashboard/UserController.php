<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function showUsers()
    {
        $users = User::all();// TODO get paginate users filtered by role CLIENT

        return view('dashboard.users.manage')->with('users', $users);
    }
}
