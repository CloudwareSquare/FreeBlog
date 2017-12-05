<?php

namespace CloudwareSquare\Blog;

use Illuminate\Support\ServiceProvider;

class CloudwareSquareBlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/vendor/cloudware-square/blog'),
        ], 'views');

        $this->publishes([
            __DIR__.'/public' => public_path('vendor/cloudware-square'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/http/routes.php';
    
        $this->loadViewsFrom(__DIR__.'/views', 'blog');
        
    }
}
