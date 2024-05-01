<?php

/*
 * This file is part of the Laravel TruliooCustomerSdk package.
 *
 * (c) Olushola O. - GeekyGeeky <olushola.op@outlook.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GeekyGeeky\TruliooCustomerSdk;

use Illuminate\Support\ServiceProvider;

class PaystackServiceProvider extends ServiceProvider
{

    /*
    * Indicates if loading of the provider is deferred.
    *
    * @var bool
    */
    protected $defer = false;

    /**
    * Publishes all the config file this package needs to function
    */
    public function boot()
    {
        $config = realpath(__DIR__.'/../config/paystack.php');

        $this->publishes([
            $config => config_path('trulioo.php')
        ]);
    }

    /**
    * Register the application services.
    */
    public function register()
    {
        $this->app->bind('laravel-trulioo-customer-sdk', function () {

            return new TruliooCustomerSdk;

        });
    }

    /**
    * Get the services provided by the provider
    * @return array
    */
    public function provides()
    {
        return ['laravel-trulioo-customer-sdk'];
    }
}