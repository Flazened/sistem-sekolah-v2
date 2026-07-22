<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\Teacher\IndexController;
use App\Http\Controllers\Teacher\ShowController;
use App\Http\Controllers\Teacher\CreateController;
use App\Http\Controllers\Teacher\EditController;
use App\Http\Controllers\Teacher\StoreController;
use App\Http\Controllers\Teacher\UpdateController;
use App\Http\Controllers\Teacher\DestroyController;
use App\Http\Controllers\School\ClassController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Manage Data Student
Route::name('students.')->prefix('students')->group(function () {

    // Daftar siswa
    Route::get('/', [StudentController::class, 'index'])->name('index');

    // Halaman Tambah (Harus sebelum /{id} agar 'create' tidak terbaca sebagai {id})
    Route::get('/create', [StudentController::class, 'create'])->name('create');

    // Halaman Detail
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');

    // Halaman Edit
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');

    // Logika Tambah Siswa
    Route::post('/', [StudentController::class, 'store'])->name('store');

    // Logika Edit Siswa
    Route::put('/{id}', [StudentController::class, 'update'])->name('update');

    // Logika Hapus Siswa
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');

});


// Manage Teacher Data
Route::name('teachers.')->prefix('teachers')->group(function () {

    // Daftar Guru
    Route::get('/', IndexController::class)->name('index');

    // Halaman Tambah (Harus sebelum /{id} agar 'create' tidak terbaca sebagai {id})
    Route::get('/create', CreateController::class)->name('create');

    // Halaman Detail
    Route::get('/{id}', ShowController::class)->name('show');

    // Halaman Edit
    Route::get('/{id}/edit', EditController::class)->name('edit');

    // Logika Tambah Guru
    Route::post('/', StoreController::class)->name('store');

    // Logika Edit Guru
    Route::put('/{id}', UpdateController::class)->name('update');

    // Logika Hapus Guru
    Route::delete('/{id}', DestroyController::class)->name('destroy');

});


// Manage Class Data
Route::resource('classes', ClassController::class);

