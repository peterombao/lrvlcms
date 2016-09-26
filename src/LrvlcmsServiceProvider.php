<?php

namespace Peterombao\Lrvlcms;

use Illuminate\Support\ServiceProvider;

class LrvlcmsServiceProvider extends ServiceProvider
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
        include __DIR__.'/routes.php';
        $this->app->make('Peterombao\Lrvlcms\LrvlcmsController');
    }
}
