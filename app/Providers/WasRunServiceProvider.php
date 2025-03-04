<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\WasRunService;
//use App\Http\Controllers\WasRun;
class WasRunServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('WasRunService', function () {
            return new WasRunService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
