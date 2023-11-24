<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\HomeController;



Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store'])->name('store');

Route::middleware(['checklogin'])->prefix('admin')->group(function(){
    // Route::get('/', [MainController::class, 'index'])->name('admin');

    Route::get('main', [MainController::class, 'index'])->name('admin');

    //Menu
    Route::prefix('menus')->group(function(){
        Route::get('add',[MenuController::class,'create'])->name('themdanhmuc');
        Route::post('add',[MenuController::class,'store']);
        Route::get('list',[MenuController::class,'index']);
        Route::get('edit/{menu}',[MenuController::class,'show']);
        Route::post('edit/{menu}',[MenuController::class,'update']);
        Route::DELETE('destroy',[MenuController::class,'destroy']);
    });

    Route::prefix('products')->group(function(){
        Route::get('add',[ProductController::class,'create']);
        Route::post('add',[ProductController::class,'store']);
        Route::get('list',[ProductController::class,'index']);
        Route::get('edit/{product}',[ProductController::class,'show']);
        Route::post('edit/{product}',[ProductController::class,'update']);
        Route::DELETE('destroy',[ProductController::class,'destroy']);

    });

    //Upload
    Route::post('upload/services',[UploadController::class,'store']);
});
Route::get('admin/login',[LoginController::class,'add']);
Route::get('/',[HomeController::class,'index']);
Route::get('/danh-muc/{id}-{slug}.html',[App\Http\Controllers\MenuController::class,'index']);
Route::get('/san-pham/{id}-{slug}.html',[App\Http\Controllers\ProductController::class,'index']);