<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('do-login',[AuthController::class,'doLogin'])->name('do.login');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('do-register',[AuthController::class,'doRegister'])->name('do.register');




Route::middleware(['islogged','prevent-back-history'])->group(function(){
    Route::get('user-dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('user-profile',[UserController::class,'userProfile'])->name('user.profile');
    Route::post('modify-profile',[UserController::class,'modifyProfile'])->name('modify.profile');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
});

Route::prefix('admin')->middleware(['islogged','prevent-back-history','is_admin:1'])->group(function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('users',[AdminController::class,'userList'])->name('user.list');
});