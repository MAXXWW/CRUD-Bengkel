<?php

use App\Http\Controllers\layoutController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\registrasiController;
use App\Models\admin;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/registrasi', [layoutController::class, 'registrasi'])->name('registrasi');
Route::post('/registrasi-submit', [registrasiController::class, 'registrasi_submit'])->name('registrasi-submit');

// Route::middleware([admin::class])->group(function () {
//     Route::post('/login', [loginController::class, 'login_submit'])->name('login-submit');
// });

Route::post('/login', [loginController::class, 'login_submit'])->name('login-submit');

Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/pelanggan', [dashboardController::class, 'pelanggan'])->name('pelanggan');
