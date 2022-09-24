<?php

class BlogPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../../views', 'new');

        $this->publishes([
            __DIR__ . '/../../views' => base_path('resources/views/vendor/new')
        ]);

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }


}
