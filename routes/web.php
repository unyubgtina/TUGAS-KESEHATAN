<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminDashboardController;

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
});

// Halaman Dashboard Admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

// CRUD Dokter
Route::resource('/admin/dokter', DokterController::class);

// Halaman Dashboard Pasien
Route::get('/pasien/dashboard', [PasienController::class, 'dashboard']);

// Booking Dokter
Route::get('/pasien/booking', [PasienController::class, 'booking']);
