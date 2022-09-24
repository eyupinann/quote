<?php
namespace eyupinann\Quote;
use Illuminate\Support\ServiceProvider;

class BlogPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'new');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/new'),
            __DIR__ . '/database/migrations/2018_08_08_100000_create_pages_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_pages_table.php'),
        ],'page');


        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }


}
