<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\makananController;
use App\Http\Controllers\pesananController;
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

// Route::get('/', [HomeController::class, 'index']);


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/', [HomeController::class, 'index']);
Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::controller(pesananController::class)->prefix("pesanan")->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/create', 'create');
    Route::get('/{pesanan}', 'show');
    Route::put('/{pesanan}', 'update');
    Route::delete('/{pesanan}', 'destroy');
    Route::get('/{pesanan}/edit', 'edit');
});

Route::controller(makananController::class)->prefix("makanan")->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/create', 'create');
    Route::get('/{makanan}', 'show');
    Route::put('/{makanan}', 'update');
    Route::delete('/{makanan}', 'destroy');
    Route::get('/{makanan}/edit', 'edit');
});
});