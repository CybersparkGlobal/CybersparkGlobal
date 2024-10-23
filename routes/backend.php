<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['auth', 'verified'])->group(function () {
Route::get('admin/dashboard', [ \App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
Route::get('admin/banner', [ \App\Http\Controllers\Backend\BannerController::class, 'index'])->name('banner.index');
Route::get('admin/banner/create', [ \App\Http\Controllers\Backend\BannerController::class, 'create'])->name('banner.create');
Route::post('admin/banner/store', [ \App\Http\Controllers\Backend\BannerController::class, 'store'])->name('banner.store');

});
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('dashboard', [\App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
        Route::get('banner', [\App\Http\Controllers\Backend\BannerController::class, 'index'])->name('banner.index');
        Route::get('banner/create', [\App\Http\Controllers\Backend\BannerController::class, 'create'])->name('banner.create');
        Route::post('banner/store', [\App\Http\Controllers\Backend\BannerController::class, 'store'])->name('banner.store');
        Route::get('banner/edit/{slug}', [\App\Http\Controllers\Backend\BannerController::class, 'edit'])->name('banner.edit');
        Route::PATCH('banner/update/{slug}', [\App\Http\Controllers\Backend\BannerController::class, 'update'])->name('banner.update');
        Route::delete('banner/destroy/{slug}', [\App\Http\Controllers\Backend\BannerController::class, 'destroy'])->name('banner.destroy');
    });

