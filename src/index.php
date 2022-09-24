<?php


namespace eyupinann\Quote;

class Index
{
    public function page($page = 'contact us', $content = ['contact us','smks'] )
    {
        return response()->json([
            '‘quotes’' => [
                 $page => $content
            ]
        ]);
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'new');

        $this->publishes([
            __DIR__ . '/../../views' => base_path('resources/views/vendor/new')
        ]);

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
