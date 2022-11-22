<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Money\Money;

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
        // Pintar directivas o parametros de entrada
        Blade::directive('rightnow', function($time){
            $date = date('d/m/Y', $time);
            echo "la fecha introducida es: " . $date;
        });

        // Transformar tipos de datos 
        /*Blade::stringable('money', function (Money $money) {
            echo $money->formato('EUR');
            // return $money->formatTo('en_GB');
        });*/
        
        // Crear nuestras propias sentencias if personalizadas
        Blade::if('mailer', function ($input) {
            $configuredMailer = config('mail.default');
            return $input == $configuredMailer;
        });
        Blade::if('disk', function ($input) {
            $configuredMailer = config('filesystems.default');
            return $input == $configuredMailer;
        });
    }
}
