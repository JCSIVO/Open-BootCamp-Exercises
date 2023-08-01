<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Session;


class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('panel.generals.logout', function($view){
            $user = Session::get('user');
            return $view->with([
                'saludation' => $user['user'],
                'password' => $user['password'],
            ]);
        });
    }
}
