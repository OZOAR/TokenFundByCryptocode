<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

// Reset website locale
$this->get('locale/reset', 'LocalizationController@changeLocale')->name('locale.reset');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::group(['prefix' => '/password'], function () {
    $this->get('/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('/reset', 'Auth\ResetPasswordController@reset');
});

// All dashboard routes
Route::group(['prefix' => '/dashboard', 'middleware' => ['admin']], function () {
    $this->get('/', 'Dashboard\DashboardController@index')->name('dashboard.index');

    Route::group(['prefix' => '/profile'], function () {
        $this->get('/', 'Dashboard\ProfileController@showProfile')->name('dashboard.profile');
        $this->post('/password/reset', 'Dashboard\ProfileController@resetAdminPassword')
            ->name('dashboard.profile.password.reset');
    });

    Route::group(['prefix' => '/users'], function () {
        $this->get('/', 'Dashboard\UserController@showUsers')->name('dashboard.users.manage');
    });
});

Route::get('/home', 'HomeController@index')->name('home'); // TODO remove

Route::get('/profile', function () { // TODO change
    return view('welcome');
})->name('profile');