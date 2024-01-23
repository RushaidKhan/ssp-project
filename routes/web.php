<?php

use App\Http\Controllers\authController;
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
})->name('home');

// Route::controller(authController::class)->group(function () {
//     Route::get('/register', 'ShowRegister')->name('register');
//     Route::get('/login', 'ShowLogin')->name('login');
//     Route::post('/register', 'authController@StoreRegister')->name('storeRegister');
// });

// Route::get('/register', 'authController@ShowRegister')->name('register');
// Route::get('/login', 'authController@ShowLogin')->name('login');
// Route::post('/register', 'authController@StoreRegister')->name('storeRegister');

Route::controller(authController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
});