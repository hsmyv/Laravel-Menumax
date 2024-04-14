<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\User\MainController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::post('/admin/update-category-status',[CategoryController::class, 'update_status'])->name('admin.update.categoryStatus');
    Route::post('/admin/update-restaurant-status',[RestaurantController::class, 'update_status'])->name('admin.update.restaurantStatus');
    Route::post('/admin/update-admin-status',[AdminController::class, 'update_status'])->name('admin.update.adminStatus');
    Route::put('/admin/restaurants/opening-time/{restaurant}', [RestaurantController::class, 'openingTime'])->name('admin.update.openingTime');
    Route::put('/admin/restaurants/deliveryInformation/{restaurant}', [RestaurantController::class, 'deliveryInformation'])->name('admin.update.deliveryInformation');
    Route::resource('/admins', AdminController::class);
    Route::resource('/admin/{restaurant}/products', ProductController::class);
    Route::resource('/admin/{restaurant}/categories', CategoryController::class);
    Route::resource('/admin/{restaurant}/subcategories', SubCategoryController::class);
    Route::resource('/admin/restaurants', RestaurantController::class);
});

Route::get('/admin/login', [AuthController::class, 'login_form'])->name('admin.login.form');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/switch-account/{id}', [AuthController::class, 'switch_account'])->name('admin.switchAccount');



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/', [MainController::class, 'index'])->name('main.index');
        Route::get('/restaurants', [MainController::class, 'restaurants'])->name('main.restaurant.index');
        Route::get('/restaurants/show/{restaurant}', [MainController::class, 'restaurantsShow'])->name('main.restaurant.show');
        Route::post("/restaurant-main-image", [RestaurantController::class,"remove_main_image"])->name("restaurant-main-image.delete");

    });



