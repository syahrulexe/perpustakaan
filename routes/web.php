<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\ReturningController;
use Illuminate\Support\Facades\Route;

// Halaman utama (Welcome)
Route::get('/', function () {
    return view('welcome');
});

// Dashboard, hanya bisa diakses setelah login dan email terverifikasi
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rute untuk profil pengguna (hanya bisa diakses setelah login)
Route::middleware('auth')->group(function () {
    // Profil pengguna
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD Data Buku
    Route::resource('books', BookController::class);
    
    // CRUD Data Siswa
    Route::resource('students', StudentController::class);
    
    // CRUD Peminjaman Buku
    Route::resource('borrowings', BorrowingController::class);
    
    // CRUD Pengembalian Buku
    Route::resource('returnings', ReturningController::class);
});

require __DIR__.'/auth.php';

