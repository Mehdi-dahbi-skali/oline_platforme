<?php

use App\Http\Middleware\checklog;
use App\Http\Controllers\Authlogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OcpController;

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

Route::get('/',[OcpController::class, 'welcome'])->name('welcome');

Route::get('/login',[Authlogin::class, 'login'])->name('login');

Route::post('/login',[Authlogin::class, 'checkacc'])->name('checkacc');

Route::get('/create_acc',[OcpController::class, 'create_acc'])->name('create_acc');

Route::post('/store_acc',[OcpController::class, 'store_acc'])->name('store_acc');
    
Route::get('/logout',[Authlogin::class, 'logout'])->name('logout');

Route::get('/profielof/{id}',[OcpController::class, 'profielof'])->name('profielof'); 
  
Route::middleware(['checklog'])->group(function(){

    Route::get('/profile',[OcpController::class, 'profile'])->name('profile');
    
    Route::get('/create_post',[OcpController::class, 'create_post'])->name('create_post');

    Route::post('/create_post',[OcpController::class, 'store_post'])->name('store_post');
    
    Route::get('/create_product',[OcpController::class, 'create_product'])->name('create_product');

    Route::post('/create_product',[OcpController::class, 'store_product'])->name('store_product');

    Route::get('/product_only/{id}',[OcpController::class, 'product_only'])->name('product_only');

       
      
});
