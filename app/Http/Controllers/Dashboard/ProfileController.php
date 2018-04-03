<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ResetAdminPasswordRequest;
use Carbon\Carbon;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Hash;

class ProfileController extends Controller
{
    /**
     * Reset the given admin's password.
     *
     * @param ResetAdminPasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resetAdminPassword(ResetAdminPasswordRequest $request)
    {
        $errorMessage = 'passwords.user';
        $user = Auth::user();

        if ($user !== null) {
            $currentPassword = $user->getAuthPassword();

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
        $user->setPassword(Hash::make($password));
        $user->setLastPasswordUpdate(Carbon::now());
        $user->save();

        event(new PasswordReset($user));
    }
}
