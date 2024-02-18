<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('login')->middleware('guest');
    Route::post('auth-user', 'auth')->name('auth.verif')->middleware('guest');
    Route::post('/logout', 'logout')->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    });
    
    Route::get('/buku', function () {
        return view('pages.buku');
    });
});

Route::middleware(['auth','role:pustakawan,admin'])->group(function () {
    Route::get('/buku', function () {
        return view('pages.buku');
    });

        Route::middleware(['auth','role:admin'])->group(function () {   

        });
});
