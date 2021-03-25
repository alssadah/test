<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use LaravelLocalization;
use View;



class LangsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       
       $langDir =     LaravelLocalization::getCurrentLocaleDirection();
       $lang    =     LaravelLocalization::getCurrentLocale(); 
       $link    =   'http://me3.artsense.ws/storage/';

       
       
         //  dd($lang ,  $on );
      
        View::share('lang',$lang);
        View::share('langDir',$langDir); 
        View::share('link',$link); 

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
