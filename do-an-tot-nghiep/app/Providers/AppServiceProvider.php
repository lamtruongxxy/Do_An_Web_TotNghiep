<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\NhaSanXuat;
use App\Cart;
use Session;
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
        view()->composer(['TTMobile/Components/header','TTMobile.checkout'],function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
        
    }
}
