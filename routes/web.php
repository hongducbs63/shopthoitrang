<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store'])->name('store');

Route::middleware(['checklogin'])->prefix('admin')->group(function(){
    Route::get('/', [MainController::class, 'index'])->name('admin');

    Route::get('main', [MainController::class, 'index'])->name('admin');

    //Menu
    Route::prefix('menus')->group(function(){
        Route::get('add',[MenuController::class,'create'])->name('themdanhmuc');
        Route::post('add',[MenuController::class,'store']);
        Route::get('list',[MenuController::class,'index']);
        Route::get('edit/{menu}',[MenuController::class,'show']);
        Route::DELETE('destroy',[MenuController::class,'destroy']);
    });
});
Route::get('admin/login',[LoginController::class,'add']);