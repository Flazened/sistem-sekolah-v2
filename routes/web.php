<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Daftar siswa
Route::get('/students', function(){
    return "Halaman Daftar siswa";
})->name('students.index');

Route::get('students/{id}', function(string $id){
    return "Menampilkan ID:{$id}";
})->name('students.show');