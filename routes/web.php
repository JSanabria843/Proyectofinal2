<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPublicController;


Route::get('/login', [AuthController::class,'showLogin'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login.post');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/productos', [ProductPublicController::class, 'index'])
        ->name('productos.index');
});


Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'isAdmin'])
    ->group(function () {

        Route::resource('products', ProductController::class)->names([
            'index'   => 'products.index',
            'create'  => 'products.create',
            'store'   => 'products.store',
            'edit'    => 'products.edit',
            'update'  => 'products.update',
            'destroy' => 'products.destroy',
            'show'    => 'products.show'
        ]);
    });

    Route::get('/test', function () {
    return "Ruta testeada";
})->middleware('test');
