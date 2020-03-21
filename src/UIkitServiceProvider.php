<?php

namespace Revolution\Pagination\UIkit;

use Illuminate\Support\ServiceProvider;

class UIkitServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../pagination', 'pagination-uikit');

        $this->publishes(
            [
                __DIR__.'/../pagination' => $this->app->resourcePath('views/vendor/pagination-uikit'),
            ],
            'pagination-uikit'
        );
    }
}
