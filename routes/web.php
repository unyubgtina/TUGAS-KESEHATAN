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
//Route::post('/login', [AuthController::class, 'login'])->name('login.process');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard_admin');
});

//rute untuk login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Middleware untuk admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Middleware untuk pasien
Route::middleware(['auth', 'role:pasien'])->group(function () {
    Route::get('/pasien/dashboard', function () {
        return view('pasien.dashboard');
    })->name('pasien.dashboard');
});