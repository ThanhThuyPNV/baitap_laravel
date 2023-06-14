<?php

namespace App\Providers;
use App\Models\Card;
use Illuminate\Support\Facades\Session;
use App\Models\product;
// use App\Models\products;
use App\Models\Type_product;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('header', function ($view) {
            $loai_sp =  Type_product::all();
            $view->with('loai_sp', $loai_sp);
        });

        view()->composer('page.product_type', function ($view) {
            $product_new =  product::where('new', 1)->orderBy('id', 'DESC')->skip(1)->take(8)->get();
            $view->with('product_new', $product_new);
        });

        view()->composer('header', function ($view) {										
                  if (Session('cart')) {										
                    $oldCart = Session::get('cart');										
                    $cart = new Card($oldCart);										
                    $view->with(['cart' => Session::get('cart'), 										
                                'product_cart' => $cart->items, 										
                                'totalPrice' => $cart->totalPrice, 										
                                'totalQty' => $cart->totalQty										
                                ]);										
                                }										
                });										
            
    }
}
