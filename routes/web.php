<?php

use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\PasienController;
use App\Http\Livewire\Doctor\Menu as DoctorMenu;
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
    return view('welcome');
});

Route::get('/demo', function () {
    return view('beranda');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::view('dashboard', 'admin.dashboard')->name('dashboard');
    Route::prefix('user')->name('user.')->group(function () {
        Route::prefix('dokter')->group(function () {
            Route::view('/', 'admin.doctor.index')->name('doctor');
            Route::get('/{id}', [DoctorController::class, 'show'])->name('doctor.show');
        });
        Route::prefix('pasien')->group(function () {
            Route::get('/', [PasienController::class, 'index'])->name('pasien');
            Route::get('/{id}', [PasienController::class, 'show'])->name('pasien.show');
        });
    });
});
