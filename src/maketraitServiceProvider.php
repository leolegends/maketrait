<?php

namespace leolegends\maketrait;

use Illuminate\Support\ServiceProvider;
use leolegends\maketrait\Commands\TraitMakeCommand;

class maketraitServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */

    protected $commands = [
        TraitMakeCommand::class,
    ];

    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'leolegends');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'leolegends');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        $this->commands($this->commands);

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/maketrait.php', 'maketrait');

        // Register the service the package provides.
        $this->app->singleton('maketrait', function ($app) {
            return new maketrait;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['maketrait'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/maketrait.php' => config_path('maketrait.php'),
        ], 'maketrait.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/leolegends'),
        ], 'maketrait.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/leolegends'),
        ], 'maketrait.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/leolegends'),
        ], 'maketrait.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
