<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\DeleteUserRequest;
use App\Http\Requests\Dashboard\RegisterUserRequest;
use App\Http\Requests\Dashboard\ResetClientPasswordRequest;
use App\Models\User;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Hash;
use App\Mail\UserCreatedMail;

class UserController extends Controller
{
    const USERS_PER_PAGE = 10;
    const REQUESTS_PER_PAGE = 10;

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
        $requests = $user->requests()->paginate(self::REQUESTS_PER_PAGE);

        return view('dashboard.users.show')->with(compact(['user', 'requests']));
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

    /**
     * Delete user.
     *
     * @param DeleteUserRequest $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function deleteUser(DeleteUserRequest $request)
    {
        $authUser = Auth::user();
        $deleteUser = User::find($request->input('client_id'));

        if($deleteUser->isRemoved()) {
            return redirect()->back()
                ->with('error', 'dashboard.users.actions.delete.already');
        }

        // prevent self-deleting
        if($deleteUser->getId() !== $authUser->getId()) {
            $deleteUser->setRemovedFlag(true);
            $deleteUser->save();

            return redirect()->back()
                ->with('success', 'dashboard.users.actions.delete.success');
        }

        return redirect()->back()
            ->with('error', 'dashboard.users.actions.delete.self_fail');
    }

    /**
     * Show dashboard user's register page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRegisterPage()
    {
        return view('dashboard.users.register');
    }

    /**
     * Register new user.
     *
     * @param RegisterUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registerUser(RegisterUserRequest $request)
    {
        $password = $request->input('password');
        $user = new User();

        $user->setRole(Role::CLIENT_ROLE_ID);
        $user->setName($request->input('name'));
        $user->setEmail($request->input('email'));
        $user->setPassword(Hash::make($password));

        // TODO add check for sending error
        Mail::to($user)->send(new UserCreatedMail($user, $password));

        $isUserCreated = $user->save();

        if($isUserCreated) {
            return redirect()
                ->route('dashboard.users.manage')
                ->with('success', 'dashboard.users.actions.create.success');
        }

        return redirect()->back()
            ->withInput()
            ->with('error', 'dashboard.users.actions.create.fail');
    }

    private function resetGivenPassword($user, $password)
    {
        $user->setPassword(Hash::make($password));
        $user->setLastPasswordUpdate(Carbon::now());

        $user->save();

        event(new PasswordReset($user));
    }
}
