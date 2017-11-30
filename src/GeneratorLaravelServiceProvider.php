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
        //php artisan vendor:publish (public all)

        //$this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/clarknguyen85/generator'),
        ], 'views');
        //views as tag name so we can put other name
        //php artisan vendor:publish --tag=views --force

        $this->publishes([
            __DIR__ . '/database/migrations' => database_path('migrations')
        ], 'migrations');
        //php artisan vendor:publish --tag=migrations --force

        $this->publishes([
            __DIR__.'/config/clarknguyen85_generator.php' => config_path('clarknguyen85_generator.php')
        ], 'config');
        //php artisan vendor:publish --tag=config

        $this->publishes([
            __DIR__ . '/assets' => public_path('generator'),
        ], 'public');
        //php artisan vendor:publish --tag=public --force
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
