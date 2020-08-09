<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\NhaSanXuat;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('TTMobile/Components/header',function($view){
            $nhaSanXuat = NhaSanXuat::all();
            $view->with('nhaSanXuat',$nhaSanXuat);
        });
    }
}
