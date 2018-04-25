<?php
/**
 * API Library for SMS - Using One Way SMS.
 * User: Mohd Nazrul Bin Mustaffa
 * Date: 25/04/2018
 * Time: 11:16 AM
 */

namespace MohdNazrul\SMSLaravel;

use Illuminate\Support\ServiceProvider;

class SMSServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/sms.php' => config_path('sms.php'),
        ], 'sms');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/sms.php','sms');

        $this->app->singleton('SMSApi', function ($app){
            $config     =   $app->make('config');
            $username   =   $config->get('sms.username');
            $password   =   $config->get('sms.password');
            $serviceURL =   $config->get('sms.serviceUrl');

            return new SMSApi($username, $password, $serviceURL);

        });
    }

    public function provides() {
        return ['SMSApi'];
    }
}
