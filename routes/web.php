<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\WelcomeController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [WelcomeController::class, 'welcome']);


Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [CategoryController::class, 'edugames']);
    Route::get('/marbel-and-friends-kids-games', [CategoryController::class, 'kidsgames']);
    Route::get('/riri-story-books', [CategoryController::class, 'storybooks']);
    Route::get('/kolak-kids-songs', [CategoryController::class, 'kidsongs']);
});

// Halaman News : route params
Route::get('news/{slug?}', [NewsController::class, 'show'])->name('news');

// Halaman Program : route prefix
Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

// Halaman News : route biasa
Route::get('about-us', [AboutUsController::class, 'index'])->name('about');

// Halaman News : route resource
Route::resource('contact-us', ContactController::class)->only([
    'index', 'store'
]);
