<?php

namespace App\Providers;

use App\Http\Middleware\Localization;
use Illuminate\Support\ServiceProvider;

class LocalizationProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('locales', Localization::LANGUAGES);
    }
}
