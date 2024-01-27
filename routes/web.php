<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
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
    return view('welcome');
})->name('landing');

Route::get('/store', function () { return view('store');})->name('store');
Route::get('/venuelisting', function () { return view('posting.venuePosting');})->name('venue.listing');


Route::controller(authController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::middleware(['auth', 'user-access:customer'])->group(function () {
    Route::get('/home', [homeController::class, 'index'])->name('home');
});
Route::middleware(['auth', 'user-access:venue'])->group(function () {
    Route::get('/venue/home', [homeController::class, 'venueHome'])->name('venue.home');
});
Route::middleware(['auth', 'user-access:catering'])->group(function () {
    Route::get('/catering/home', [homeController::class, 'cateringHome'])->name('catering.home');
});
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [homeController::class, 'adminHome'])->name('admin.home');
});