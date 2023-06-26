<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamanController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::resource('reservations', ReservationController::class);
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [PeminjamanController::class, 'index'])->name('peminjamans.index');
    Route::get('/peminjamans/create', [PeminjamanController::class, 'create'])->name('peminjamans.create');
    Route::post('/peminjamans/store', [PeminjamanController::class, 'store'])->name('peminjamans.store');
    Route::get('/peminjamans/show/{peminjaman}', [PeminjamanController::class, 'show'])->name('peminjamans.show');
    Route::get('/peminjamans/edit/{peminjaman}', [PeminjamanController::class, 'edit'])->name('peminjamans.edit');
    Route::get('/peminjamans/destroy/{peminjaman}', [PeminjamanController::class, 'destroy'])->name('peminjamans.destroy');
    Route::put('/peminjamans/update/{peminjaman}', [PeminjamanController::class, 'update'])->name('peminjamans.update');
});
require __DIR__.'/auth.php';
