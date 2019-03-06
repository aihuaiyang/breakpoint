<?php

namespace Huaiyang\Breakpoint;

use Illuminate\Support\ServiceProvider;

class BreakpointServiceProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('breakpoint', function () {
            return new Breakpoint();
        });
    }

    public function provides(){
        return ['breakpoint'];
    }
}
