<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>['admin','auth']],function(){
    Route::get('dashboard',[\App\Http\Controllers\AdminController::class,'dashboard'])->name('admin.dashboard');
});
Route::group(['prefix'=>'manager','middleware'=>['manager','auth']],function(){
    Route::get('dashboard',[\App\Http\Controllers\ManagerController::class,'dashboard'])->name('manager.dashboard');
});
Route::group(['prefix'=>'customer','middleware'=>['customer','auth']],function(){
    Route::get('dashboard',[\App\Http\Controllers\CustomerContoller::class,'dashboard'])->name('customer.dashboard');
});
