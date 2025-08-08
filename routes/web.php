<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fontend\HomeController;
use App\Http\Controllers\backend\HomeadminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\UseradminController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\fontend\CartController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\RolesController ;
use App\Http\Controllers\fontend\CustomerController ;
use App\Http\Controllers\fontend\checkoutController ;
use App\Http\Controllers\backend\BlogController ;
use App\Http\Controllers\backend\OrderController ;
use App\Http\Controllers\backend\CouponController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//===========================    START  FONTEND      ==================================//

    Route::get('/',[HomeController::class, 'Home'])->name('Home');

    Route::get('/Shop',[HomeController::class, 'Shop'])->name('Shops');
    
    Route::get('/sortBy={mien}',[HomeController::class, 'beseller'])->name('beseller');
    Route::get('/sortBys={new}',[HomeController::class, 'newpro'])->name('newpro');
    Route::get('/{catpro}-{slug}',[HomeController::class, 'Shopcat'])->name('Shops.catpro');
    Route::get('/Product-detail/{id}',[HomeController::class, 'Productdetail'])->name('Productdetail');
    // Route::get('/Shop-byprice',[HomeController::class, 'Sortby'])->name('Sort.by');
    Route::get('/search/{id}',[HomeController::class, 'searbrand'])->name('shop.searbrand');

    Route::get('/product-favorite/{id}',[HomeController::class, 'favorite'])->name('favorite');

    Route::get('/Cart',[HomeController::class, 'Cart'])->name('Cart');
    Route::get('/Checkout',[checkoutController::class, 'Checkout'])->name('Checkout');
    Route::get('/About-Us',[HomeController::class, 'About'])->name('About');
    Route::get('/Contac-us',[HomeController::class, 'Contac'])->name('Contac');

      // ============================  BOLG ==================================== //

    Route::get('/Blog',[HomeController::class, 'Blog'])->name('Blog');
    Route::get('/Blogdetail/{id}',[HomeController::class, 'Blogdetail'])->name('Blogdetail');
  
    Route::post('/comment/{id}',[HomeController::class, 'postcomment'])->name('postcomment');
    Route::post('/reply',[HomeController::class, 'reply'])->name('reply');

    // ============================  account/profile==================================== //
    Route::get('/account',[CustomerController::class, 'account'])->name('account');
    Route::put('/up-profile',[CustomerController::class, 'up_account'])->name('up.accoun');
    Route::get('/actived/{customer}/{token}',[CustomerController::class, 'actived'])->name('active.accoun');


   // ============================  ORDER ==================================== //account/profile
   Route::get('/purchase',[HomeController::class, 'order'])->name('order');
   Route::get('/purchaseor/{order}',[HomeController::class, 'orderpur'])->name('orderpur');
   Route::get('/purase/{sta}',[HomeController::class, 'order2'])->name('stats');


    // ============================  CHECKOUT  ==================================== //
    Route::get('/Checkout',[checkoutController::class, 'Checkout'])->name('Checkout');
    Route::post('/coupon',[checkoutController::class, 'checkout'])->name('use.coupon');
    Route::post('/Checkout',[checkoutController::class, 'post_checkout'])->name('post.checkout');


// ============================  CUSTOMER   ==================================== //
    Route::get('/register' ,[CustomerController::class, 'register'])->name('cus.register');
    Route::post('/register' ,[CustomerController::class, 'post_register'])->name('cuspost.register');
    Route::get('/Login' ,[CustomerController::class, 'login'])->name('cus.Login');
    Route::post('/Login' ,[CustomerController::class, 'post_login'])->name('postcus.login');
    Route::get('/logout' ,[CustomerController::class, 'logout'])->name('cus.logout');
    Route::get('/buyer-reset' ,[CustomerController::class, 'forgetpassword'])->name('cus.forgetpassword');
    Route::post('/buyer-reset' ,[CustomerController::class, 'postpassword'])->name('cus.pospassword');
    Route::get('/new-password/{email}/{token}' ,[CustomerController::class, 'newgetpassword'])->name('cus.newgetpassword');
    Route::post('/new-password/{email}/{token}' ,[CustomerController::class, 'postgetpassword'])->name('cus.postgetpassword');
    
   


    Route::group(['prefix'=>'Cart' ,'middleware'=>'customer' ], function(){
        Route::post('/{id}',[CartController::class, 'addCart'])->name('Cart.add');
        Route::get('',[CartController::class, 'Cart'])->name('view.cart');
        Route::delete('/remove/{id}',[CartController::class, 'remove'])->name('remove.cart');
        Route::get('/update/{id}',[CartController::class, 'updatecart'])->name('quantity.update');
        Route::delete('/clearal',[CartController::class, 'clearall'])->name('clearall.cart');
    });


//===========================     END FONTEND        ==================================//  

//===========================     START BACKEND     ===================================//

    Route::group(['prefix'=>'/backend','as' => 'admin.' ,'middleware'=>'auth' ], function(){
    Route::get('/Dashboard',[HomeadminController::class, 'HomeAdmin'])->name('backend.Home');
    Route::get('/profile',[UseradminController::class, 'profile'])->name('profile');
    Route::put('/upprofile',[UseradminController::class, 'up_profile'])->name('up.profile');
     // -------------------------    CATEGORY     ------------------------------------//

    Route::get('/addCategory',[CategoryController::class, 'addcategory'])->name('add.category');
    Route::post('/saveCategory',[CategoryController::class, 'savecategory'])->name('save.category');
    Route::get('/listcategory',[CategoryController::class, 'listcategory'])->name('list.category');
    Route::delete('/deletecategory/{id}',[CategoryController::class, 'deletecategory'])->name('delete.category');
    Route::get('/editcategory/{id}',[CategoryController::class, 'editcategory'])->name('edit.category');
    Route::put('/updatecategory/{id}',[CategoryController::class, 'updatecategory'])->name('update.category');
  

     // -------------------------    CATEGORYSUBCATEOGRY     ------------------------------------//
     Route::get('/add-subcategory/{id}',[CategoryController::class, 'addsubcat'])->name('add.subcat');
     Route::post('/saveCatsub/{id}',[CategoryController::class, 'savesubcat'])->name('save.catsub');
    // Route::get('/edit-catsub/{id}',[CategoryController::class, 'editcatsub'])->name('edit.catsub');
    // Route::put('/update-catsub/{id}',[CategoryController::class, 'updatesub'])->name('update.catsub');
  


     // ------------------------     PRODUCT      -----------------------------------//

    Route::get('addproduct',[ProductController::class, 'addproduct'])->name('add.product');
    Route::post('saveproduct',[ProductController::class, 'saveproduct'])->name('save.product');
    Route::get('listproduct',[ProductController::class, 'listproduct'])->name('list.product');
    Route::delete('deletepro/{id}',[ProductController::class, 'deleteproduct'])->name('delete.product');
    Route::get('editproduct/{id}',[ProductController::class, 'editproduct'])->name('edit.product');
    Route::put('updateproduct/{id}',[ProductController::class, 'updateproduct'])->name('update.product');
    Route::get('/product-detail/{id}',[ProductController::class, 'Prodetail'])->name('Protdetail');

    
    Route::delete('/productimages/{productimages}',[ProductController::class, 'deleteproimages'])->name('productimage.delete');
    Route::get('/editImages/{id}',[ProductController::class, 'editimg'])->name('pro_img.edit');
    Route::put('/updateimage/{id}',[ProductController::class, 'updateimg'])->name('proimg.update');

      // -------------------------   ORDER      ----------------------------------//

      Route::get('/listorder',[OrderController::class, 'Listorder'])->name('list.order');
      Route::get('/Editorder/{id}',[OrderController::class, 'Editorder'])->name('order.edit');
      Route::put('/order/{order}',[OrderController::class, 'updateorder'])->name('order.update');
      Route::get('/ordertype/{statu}',[OrderController::class, 'order2'])->name('stats');

    //===========================     BANNER    ===================================//
    Route::get('/banner',[BannerController::class, 'banner'])->name('banner');
    Route::post('/savebanner',[BannerController::class, 'savebanner'])->name('save.banner');
    Route::get('/listbanner',[BannerController::class, 'listbanner'])->name('list.banner');
    Route::get('editbaner/{id}',[BannerController::class, 'editbaner'])->name('edit.baner');
    Route::put('updatebaner/{id}',[BannerController::class, 'updatebaner'])->name('update.baner');
    Route::delete('deletebaner/{id}',[BannerController::class, 'deletebaner'])->name('delete.baner');

    // -------------------------    BLOG     ----------------------------------//
    Route::get('/blog',[BlogController::class, 'Blog'])->name('Blog');
    Route::post('/saveblog',[BlogController::class, 'saveBlog'])->name('save.blog');
    Route::get('/listblog',[BlogController::class, 'listblog'])->name('list.blog');
    Route::get('editbog/{id}',[BlogController::class, 'editbog'])->name('edit.blog');
    Route::put('updatebog/{id}',[BlogController::class, 'updatebog'])->name('update.blog');
    Route::delete('deleteblog/{id}',[BlogController::class, 'deleteblog'])->name('delete.bog');


     
    // -------------------------    COLOR       ----------------------------------//

    Route::get('/color',[HomeadminController::class, 'addcolor'])->name('add.color');
    Route::post('/savecolor',[HomeadminController::class, 'savecolor'])->name('save.color');
    Route::get('/editcolor/{id}',[HomeadminController::class, 'editcolor'])->name('edit.color');
    Route::put('/updatecolor/{id}',[HomeadminController::class, 'updatecolor'])->name('update.color');
    Route::delete('/deletecolor/{id}',[HomeadminController::class, 'deletecolor'])->name('delete.color');

    // -------------------------    TYPE     ----------------------------------//

    Route::get('/type',[HomeadminController::class, 'addtype'])->name('add.type');
    Route::post('/savetype',[HomeadminController::class, 'savetype'])->name('save.type');
    Route::get('/editc-type/{id}',[HomeadminController::class, 'edittype'])->name('edit.type');
    Route::put('/updatetype/{id}',[HomeadminController::class, 'updatetype'])->name('update.type');
    Route::delete('/deletetype/{id}',[HomeadminController::class, 'deletetype'])->name('delete.type');



     // -------------------------    Brand       ----------------------------------//

    Route::get('brand',[HomeadminController::class, 'addbrand'])->name('add.Brand');
    Route::post('/savebrand',[HomeadminController::class, 'savebrand'])->name('save.brand');
    Route::get('/editbrand/{id}',[HomeadminController::class, 'editbrand'])->name('edit.brand');
    Route::put('/updatebrand/{id}',[HomeadminController::class, 'updatebrand'])->name('update.brand');
    Route::delete('/deletebrand/{id}',[HomeadminController::class, 'deletebrand'])->name('delete.brand');

     // -------------------------    Tài khoản quản trị      ----------------------------------//
     Route::get('/roles',[RolesController ::class, 'index'])->name('list.roles');
     Route::get('/addroles',[RolesController ::class, 'create'])->name('add.roles');
     Route::post('/saveroles',[RolesController ::class, 'saverole'])->name('save.roles');
     Route::get('/editroles/{id}',[RolesController ::class, 'editrole'])->name('edit.roles');
     Route::put('/updatetroles/{id}',[RolesController ::class, 'updateroles'])->name('update.roles');
     Route::get('/listuser',[UseradminController ::class, 'listuser'])->name('list.user');
     Route::get('/Roleuser/{user}',[UseradminController ::class, 'roletuser'])->name('roles.user');
     Route::post('/storerole/{user}',[UseradminController ::class, 'seveRoleuser'])->name('save.rolesuser');
     Route::get('/edituser/{user}',[UseradminController ::class, 'edituser'])->name('edit.user');
     Route::put('/updateuser/{user}',[UseradminController ::class, 'updateuser'])->name('update.user');
      // -------------------------   coupon      ----------------------------------//

    Route::get('addcoupon',[CouponController::class, 'addcoupon'])->name('add.coupon');
    Route::post('savecoupon',[CouponController::class, 'savecoupon'])->name('save.coupon');
    Route::get('listcoupon',[CouponController::class, 'listcoupon'])->name('list.coupon');
    Route::delete('deletecoupon/{id}',[CouponController::class, 'deletecoupon'])->name('delete.coupon');
    Route::get('editcoupon/{id}',[CouponController::class, 'editcoupon'])->name('edit.coupon');
    Route::put('updatecoupon/{id}',[CouponController::class, 'updatecoupon'])->name('update.coupon');
    
   });
    Route::get('/error',[UseradminController ::class, 'error'])->name('error');
    // -------------------------   login       ----------------------------------//
   Route::group(['prefix'=>'/backend'], function(){
    Route::get('/Sign-up',[UseradminController::class, 'Signup'])->name('backend.Signup');
    Route::post('/Sign-up',[UseradminController::class, 'post_Sigup'])->name('post.Signup');
    Route::get('/Sign-in',[UseradminController::class, 'Signin'])->name('backend.Signin');
    Route::post('/Sign-in',[UseradminController::class, 'post_Signin'])->name('post.Signin');
    Route::get('/logout' ,[UseradminController::class, 'logout'])->name('logout');
});
  

//===========================     END BACKEND     ===================================//
