<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CartRoom\CartRoom;
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
        view()->composer('*',function($view){
            $view->with([
                'cart' => new CartRoom(),
            ]);
        });
    }
}
