<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ResetClientPasswordRequest;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Hash;

class UserController extends Controller
{
    const USERS_PER_PAGE = 1; // TODO change

    /**
     * Show all clients.
     *
     * @return $this
     */
    public function showUsers()
    {
        $users = User::clients()->paginate(self::USERS_PER_PAGE);

        return view('dashboard.users.manage')->with('users', $users);
    }

    /**
     * Show particular user's page.
     *
     * @param null $userId
     * @return $this
     */
    public function showParticularUser($userId = null)
    {
        $user = User::find($userId);

        return view('dashboard.users.show')->with('user', $user);
    }

    /**
     * Reset the given user's password.
     *
     * @param ResetClientPasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resetPassword(ResetClientPasswordRequest $request)
    {
        $errorMessage = 'passwords.user';
        $user = User::find($request->input('client_id'));

        if ($user !== null) {
            $currentPassword = $user->getPassword();

            $oldPassword = $request->input('old_password');
            $password = $request->input('password');

            if (Hash::check($oldPassword, $currentPassword) && !Hash::check($password, $currentPassword)) {
                $this->resetGivenPassword($user, $password);

                return redirect()->back()->with('success', 'passwords.reset');
            }

            if (!Hash::check($password, $currentPassword)) {
                $errorMessage = 'passwords.old_password';
            } else {
                $errorMessage = 'passwords.not_same_password';
            }
        }

        return redirect()->back()->with('oldPasswordError', $errorMessage);
    }

    private function resetGivenPassword($user, $password)
    {
        $user->password = Hash::make($password);
        $user->save();

        event(new PasswordReset($user));
    }
}
