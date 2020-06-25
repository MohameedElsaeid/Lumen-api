<?php

namespace App\Providers;

use App\Cores\Repositories\IUserAuthRepository;
use App\Cores\Repositories\UserAuthRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
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
        $this->app->bind(IUserAuthRepository::class, UserAuthRepository::class);
    }
}
