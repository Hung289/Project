<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CartRoom\CartRoom;
use App\Models\System;
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
        $email = System::where('key','email')->get();
        $hostline = System::where('key','hostline')->get();
        $iconSocial = System::where('key','iconSocial')->get();
        foreach($iconSocial as $iS){
            $mangIcon = json_decode($iS->data);
        }
        $address = System::where('key','address')->get();
        $logo = System::where('key','logo')->get();
        view()->composer('*',function($view){
            $view->with([
                'cart' => new CartRoom(),
            ]);

        });
        view()->share([
            'email'=>$email,
            'hostline'=>$hostline,
            'iconSocial'=>$iconSocial,
            'mangIcon'=>$mangIcon,
            'address'=>$address,
            'logo'=>$logo
        ]);
    }
}
