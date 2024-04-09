<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware'=>'admin'],function(){

    Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::post('/admin/update-category-status',[CategoryController::class, 'update_status'])->name('admin.update.categoryStatus');
    Route::resource('/admin/{restaurant}/products', ProductController::class);
    Route::resource('/admin/{restaurant}/categories', CategoryController::class);
    Route::resource('/admin/{restaurant}/subcategories', SubCategoryController::class);
    Route::resource('/admin/restaurants', RestaurantController::class);
});

Route::get('/admin/login', [AuthController::class, 'login_form'])->name('admin.login.form');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/switch-account/{id}', [AuthController::class, 'switch_account'])->name('admin.switchAccount');
