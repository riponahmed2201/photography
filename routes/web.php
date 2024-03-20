<?php

use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('web.home');
});

Route::get('blog', [BlogController::class, 'index'])->name('web.blog');
Route::get('blog-details', [BlogController::class, 'blogDetails'])->name('web.blogDetails');

//Web Routes
Route::get('contact', [HomeController::class, 'contact'])->name('web.contact');
Route::get('about-me', [HomeController::class, 'aboutMe'])->name('web.aboutMe');
Route::get('gallery', [HomeController::class, 'gallery'])->name('web.gallery');
Route::get('travelling', [HomeController::class, 'travelling'])->name('web.travelling');
Route::get('legal-profession', [HomeController::class, 'legalProfession'])->name('web.legalProfession');
