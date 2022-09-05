<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    // app/Http/Kernel.php 'IsAdminMiddleware' route middleware
    $is_admin = auth()->user()->is_admin;
    if($is_admin === 1){
        return redirect('/admin/products');
    }else{
        return redirect('/user/products');
    }
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => 'admin', 'middleware' => 'is_admin'], function(){
        Route::get('/products', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('index');
        Route::get('/products/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('create');
        Route::post('/storeproduct', [App\Http\Controllers\Admin\ProductController::class, 'store']);
        Route::delete('/products/{product}', [App\Http\Controllers\Admin\ProductController::class, 'destroy']);
    });

    Route::group(['prefix' => 'user'], function(){
        Route::get('/products', [App\Http\Controllers\User\ProductController::class, 'index'])->name('userIndex');
    });
});

require __DIR__.'/auth.php';
