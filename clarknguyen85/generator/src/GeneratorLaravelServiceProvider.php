<?php
namespace ClarkNguyen85\Generator;

use Illuminate\Support\ServiceProvider;

class GeneratorLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        if ( is_dir(base_path() . '/resources/views/clarknguyen85/generator') ) {
            $this->loadViewsFrom(base_path() . '/resources/views/clarknguyen85/generator', 'generator');
        }
        else {
            $this->loadViewsFrom(__DIR__ . '/views', 'generator');
        }

        //$this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/clarknguyen85/generator'),
            __DIR__ . '/database/migrations' => database_path('migrations'),
            __DIR__ . '/assets' => public_path('generator'),
            //__DIR__.'/../config/package.php' => config_path('package.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include_once(__DIR__ . '/routes.php');
    }
}
