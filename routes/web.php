<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('main');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::middleware(['role:admin'])->prefix('inside')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('mainAdmin'); // /admin

    Route::resource('category', CategoryController::class);
    Route::resource('page', PageController::class);
});
