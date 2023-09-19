<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store', [LoginController::class, 'store'])->name('store');

Route::middleware(['checklogin'])->prefix('admin')->group(function(){
    Route::get('main', [MainController::class, 'index'])->name('admin');
});
Route::get('admin/login',[LoginController::class,'add']);