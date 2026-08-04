<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 Route::get('/institute-lists',[\App\Http\Controllers\Api\InstituteController::class,'lists'])->name('institute.lists');
 Route::get('/institute-logo',[\App\Http\Controllers\Api\InstituteController::class,'getLogo'])->name('institute.getLogo');
 Route::post('/login',[\App\Http\Controllers\Api\AuthController::class,'login'])->name('institute.Login');
 Route::post('/forgot-password-otp',[\App\Http\Controllers\Api\AuthController::class,'forgotPassword'])->name('institute.forgotPassword');
