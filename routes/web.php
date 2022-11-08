<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RoController;
use Illuminate\Support\Facades\Route;



Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/{slug}', [MainController::class, 'page'])->name('page');
Route::get('zdorova-dytyna', [MainController::class, 'child'])->name('child');
Route::get('/ru', [RoController::class, 'index'])->name('ro');
Route::get('ru/{slug}', [RoController::class, 'pagero'])->name('pagero');
Route::match(['post','get'], '/send', [ContactController::class, 'send'])->name('send');


Auth::routes();

Route::group(['prefix'=>'inside', 'middleware'=>['auth', 'role:admin|user']], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('mainAdmin');
    Route::resource('category', CategoryController::class);
    Route::resource('page', PageController::class);
});
