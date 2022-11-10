<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RoController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;



Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('ua/{slug}', [MainController::class, 'page'])->name('page');
Route::get('zdorova-dytyna', [MainController::class, 'child'])->name('child');
Route::get('/ru', [RoController::class, 'index'])->name('ro');
Route::get('ru/{slug}', [RoController::class, 'pagero'])->name('pagero');
Route::get('news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('news/{slug}', [\App\Http\Controllers\NewsController::class, 'more'])->name('news.more');
Route::get('vidguky', [TestimonialController::class, 'index'])->name('testimonial.index');
Route::post('', [TestimonialController::class, 'store'])->name('testimonial-send');
Route::get('testimonial/{slug}', [TestimonialController::class, 'more'])->name('testimonial.more');
Route::match(['post','get'], '/send', [ContactController::class, 'send'])->name('send');


Auth::routes();

Route::group(['prefix'=>'inside', 'middleware'=>['auth', 'role:admin|user']], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('mainAdmin');
    Route::resource('category', CategoryController::class);
    Route::resource('page', PageController::class);
});
