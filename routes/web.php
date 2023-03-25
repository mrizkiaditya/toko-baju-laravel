<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BajuController;

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

Route::get('/',  [BajuController::class, 'index']);

Route::get('/category', [BajuController::class, 'category']);

Route::get('/about', function () {
    return view('users/about');
});

Route::get('/signup', function () {
    return view('users/signup');
});

Route::get('/login-admin', function () {
    return view('admin/loginadmin');
});

Route::get('/signup-admin', function () {
    return view('admin/signupadmin');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

// CRUD BAJU ADMIN
Route::get('/admin/baju', [BajuController::class, 'index_baju']);
Route::get('/admin/baju/create', [BajuController::class, 'create']);
Route::post('/admin/baju/store', [BajuController::class, 'store']);
Route::get('/admin/baju/{id}/edit', [BajuController::class, 'edit']);
Route::put('/admin/baju/{id}', [BajuController::class, 'update']);
Route::delete('/admin/baju/{id}', [BajuController::class, 'destroy']);