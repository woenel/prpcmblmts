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
        $this->publishes([
            __DIR__.'/database/migrations/prpcmblmts' => database_path('migrations') . '/prpcmblmts'
        ], 'prpcmblmts-migrations');

        
        $this->publishes([
            __DIR__.'/database/seeds' => database_path('seeds')
        ], 'prpcmblmts-seeds');
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
