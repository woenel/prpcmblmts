<?php

namespace Woenel\Prpcmblmts;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $version = (float) app()->version();

        $this->publishes([
            __DIR__.'/database/migrations/prpcmblmts' => database_path('migrations') . '/prpcmblmts'
        ], 'prpcmblmts-migrations');

        if($version >= 8) {
            $this->publishes([
                __DIR__.'/database/seeders' => database_path('seeders')
            ], 'prpcmblmts-seeders');
        } else {
            $this->publishes([
                __DIR__.'/database/seeds' => database_path('seeds')
            ], 'prpcmblmts-seeds');
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
