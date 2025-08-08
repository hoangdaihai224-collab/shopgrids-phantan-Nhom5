<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use App\Models\cart ;
use App\Models\order ;
use Validator;
use Hash;
use Auth;

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
        Validator::extend('check_passwordold', function( $attribute,$value,$parameters,$validator){
            $accoun = Auth::user();
            return Hash::check($value , $accoun->password);
        });
        Validator::extend('checks_passwordold', function( $attribute,$value,$parameters,$validator){
            $accouns = Auth::guard('cus')->user();
            return Hash::check($value , $accouns->password);
        });
        Paginator::useBootstrap();
        view()->composer("*", function($view){
            $global_category = Category::where('parden_id','0')->get();
         $view->with(compact('global_category'))  ;  
          });
         
        
    }
}
