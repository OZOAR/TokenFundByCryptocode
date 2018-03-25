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

$this->get('locale/reset', 'LocalizationController@changeLocale')->name('locale.reset');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['prefix' => '/dashboard', 'middleware' => ['admin']], function () {
    $this->get('/', 'Dashboard\DashboardController@index')->name('dashboard.index');

    Route::group(['prefix' => '/profile'], function () {
        $this->get('/', 'Dashboard\ProfileController@showProfile')->name('dashboard.profile');
        $this->post('/password/reset', 'Dashboard\ProfileController@resetAdminPassword')
            ->name('dashboard.profile.password.reset');
    });
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', function () {
    return view('welcome');
})->name('profile');