<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Braintree\Gateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Gateway::class, function($app){
            return new Gateway(
                [
                    'environment' => 'sandbox',
                    'merchantId' => 'txjv5dqd3qs3vbsy',
                    'publicKey' => 'skr4kg3qch8yqsr6',
                    'privateKey' => 'b4902d9cf6797acb2452d0546698499d'
                ],
            );
        });
    }
}
