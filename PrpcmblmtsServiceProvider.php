<?php

namespace Woenel\Prpcmblmts;

use Illuminate\Support\ServiceProvider;

class PrpcmblmtsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/database/migrations/prpcmblmts' => database_path('migrations')
        ], 'migrations');

        
        $this->publishes([
            __DIR__.'/database/seeds' => database_path('migrations')
        ], 'seeds');
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
