<?php

namespace GeTracker\FlushIdeHelper;

use Illuminate\Support\ServiceProvider;

class FlushIdeHelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FlushIdeHelperCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {

    }
}
