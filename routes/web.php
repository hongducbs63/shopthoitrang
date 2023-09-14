<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Middleware\Authenticate;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::middleware(['auth'])->group(function(){
//     Route::get('admin/main',[MainController::class,'index'])->name('admin');

// });
Route::get('admin/users/login',[LoginController::class,'index'])->name('login');
Route::post('/admin/users/login/store',[LoginController::class,'store'])->name('store');

Route::get('admin/main',[MainController::class,'index'])->name('admin')->middleware('auth');
