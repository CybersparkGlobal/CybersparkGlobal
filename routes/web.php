<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';
require __DIR__.'/backend.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Auth::routes(['register'=>false]);
Route::get('/',[\App\Http\Controllers\Frontend\DashboardController::class,'index'])->name('home');
Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

//Route::get('admin/dashboard', function () {
//
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about_us',[\App\Http\Controllers\Frontend\AboutUsController::class,'index' ])->name('about_us');
Route::get('/services',[\App\Http\Controllers\Frontend\ServicesController::class,'index' ])->name('services.index');
Route::get('/testimonial',[\App\Http\Controllers\Frontend\TestimonialController::class,'index' ])->name('testimonial.index');
Route::get('/blog',[\App\Http\Controllers\Frontend\BlogController::class,'index' ])->name('blog.index');
Route::get('/single_blog',[\App\Http\Controllers\Frontend\BlogController::class,'singleBlog' ])->name('single_blog');
Route::get('/contact_us',[\App\Http\Controllers\Frontend\ContactController::class,'index' ])->name('contact.index');
Route::get('/seo', [\App\Http\Controllers\Frontend\SeoController::class, 'index'])->name('seo.index');


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function (){
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
