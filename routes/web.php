<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\RegisterController;

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

//Halaman home
Route::get('/',  [HomeController::class, 'index']);

// Halaman About
Route::get('/about', function () {
    return view('users/about');
});

//halaman baju
Route::get('/baju/{id}', [BajuController::class, 'show']);
Route::get('/baju-pria', [BajuController::class, 'pria']);
Route::get('/baju-wanita', [BajuController::class, 'wanita']);

// login user
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register user
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    // Dashboard admin
    Route::get('/admin', function () {
        return view('/admin/dashboard');
    });

    // CRUD BAJU
    Route::get('/admin/baju', [BajuController::class, 'index_baju']);
    Route::get('/admin/baju/create', [BajuController::class, 'create']);
    Route::post('/admin/baju/store', [BajuController::class, 'store']);
    Route::get('/admin/baju/{id}/edit', [BajuController::class, 'edit']);
    Route::put('/admin/baju/{id}', [BajuController::class, 'update']);
    Route::delete('/admin/baju/{id}', [BajuController::class, 'destroy']);

    //CRUD PROMO
    Route::resource('/admin/promo', PromoController::class);
});