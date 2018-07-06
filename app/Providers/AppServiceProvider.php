<?php

namespace App\Providers;

// use Laravel\Cashier\Cashier;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Cashier::useCurrency('gbp', '£');
        // \Braintree_Configuration::environment(config('services.braintree.environment'));
        // \Braintree_Configuration::merchantId(config('services.braintree.merchant_id'));
        // \Braintree_Configuration::publicKey(config('services.braintree.public_key'));
        // \Braintree_Configuration::privateKey(config('services.braintree.private_key'));  
        
        // view()->composer(['site.tips', 'site.insight'], function($view) {
        //     $view->with('tags', \App\Tag::pluck('name'));
        // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
