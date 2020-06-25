<?php

namespace App\Providers;

use App\Cores\Services\{IUserAuthService, UserAuthService};
use Illuminate\Support\ServiceProvider;

class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IUserAuthService::class, UserAuthService::class);
    }
}
