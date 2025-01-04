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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (){
})->name('login');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

Route::get('/login/dashboard', function () {
    return view('dashboard');
});

Route::get('/login/dashboard/dataUser', function () {
    return view('dataUser');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dataUser', [DataUserController::class, 'index'])->name('admin.dataUser');
});

// routes/web.php

use App\Http\Controllers\UserController;

Route::resource('users', UserController::class);

// Rute untuk menampilkan form data user
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// Rute untuk menyimpan data user baru
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Rute untuk menampilkan form edit user
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

// Rute untuk mengupdate user
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

// Rute untuk menghapus user
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');