<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    const USERS_PER_PAGE = 1; // TODO change

    public function showUsers()
    {
        $users = User::clients()->paginate(self::USERS_PER_PAGE);

        return view('dashboard.users.manage')->with('users', $users);
    }

    public function showParticularUser($userId = null)
    {
        return User::find($userId);
    }
}
