<?php

namespace Woenel\Prpcmblmts;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Woenel\Prpcmblmts\Commands\RunPrpcmblmts;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RunPrpcmblmts::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/database/migrations/prpcmblmts' => database_path('migrations') . '/prpcmblmts'
        ], 'prpcmblmts-migrations');
    }
}
