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

$this->get('/', 'HomeController@showIndexPage')->name('index');

// Reset website locale
$this->get('locale/reset', 'LocalizationController@changeLocale')->name('locale.reset');

// Authentication Routes...
$this->post('login', 'Auth\LoginController@loginPost');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::group(['prefix' => '/password'], function () {
    $this->get('/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    $this->post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    $this->get('/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    $this->post('/reset', 'Auth\ResetPasswordController@reset');
});

// Dashboard routes
Route::group(['prefix' => '/dashboard', 'middleware' => ['admin']], function () {
    $this->get('/', 'Dashboard\DashboardController@index')->name('dashboard.index');

    Route::group(['prefix' => '/profile'], function () {
        $this->post('/password/reset', 'Dashboard\ProfileController@resetAdminPassword')
            ->name('dashboard.profile.password.reset');
    });

    // Dashboard requests routes
    Route::group(['prefix' => '/requests'], function () {
        $this->get('/', 'Dashboard\RequestController@showRequests')->name('dashboard.requests.index');
        $this->get('/{id}', 'Dashboard\RequestController@showParticularRequest')
            ->where('id', '[0-9]+')
            ->name('dashboard.requests.show');
    });

    // Dashboard statistics routes
    Route::group(['prefix' => '/statistics'], function () {
        $this->get('/', 'Dashboard\StatisticsController@showStatisticsPage')->name('dashboard.statistics.index');
        $this->post('/upgrade/graph/main', 'Dashboard\StatisticsController@upgradeMainGraph')
            ->name('dashboard.statistics.upgrade.graph.main');
        $this->post('/upgrade/graph/portfolio', 'Dashboard\StatisticsController@upgradePortfolioGraph')
            ->name('dashboard.statistics.upgrade.graph.portfolio');
    });

    // Dashboard users routes
    Route::group(['prefix' => '/users'], function () {
        $this->get('/', 'Dashboard\UserController@showUsers')->name('dashboard.users.manage');
        $this->get('/register', 'Dashboard\UserController@showRegisterPage')->name('dashboard.users.register');
        $this->get('/{id}', 'Dashboard\UserController@showParticularUser')
            ->where('id', '[0-9]+')
            ->name('dashboard.users.show');

        $this->post('/register', 'Dashboard\UserController@registerUser')->name('dashboard.users.register.post');
        $this->post('/password/reset', 'Dashboard\UserController@resetPassword')
            ->name('dashboard.users.password.reset');
        $this->post('/delete', 'Dashboard\UserController@deleteUser')->name('dashboard.users.delete');
    });
});

Route::group(['prefix' => '/profile', 'middleware' => ['auth']], function () {
    $this->get('/', 'ClientProfileController@showProfile')->name('profile.show');
});

Route::group(['prefix' => '/statistics'], function () {
    $this->get('/graph/main', 'StatisticsController@getMainGraph');
});
