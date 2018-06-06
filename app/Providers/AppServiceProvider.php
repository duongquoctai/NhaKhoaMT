<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\loaidichvu;
use App\khachhang;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $loaidichvu=loaidichvu::all();
            $view->with('loaidichvu',$loaidichvu);
        });
        view()->composer('header',function($view){
            $khachhang=khachhang::all();
            $view->with('khachhang',$khachhang);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
