<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::name('students.')->prefix('students')->group(function(){
Route::get('/', [StudentController::class, 'index'])->name('index');

Route::get('/', function () {
    return "Goat Game PC junior";
})->name('students.index');

Route::get('/{id}', function ($id) {
    return "Menampilakn id:{$id}";
})->name('students.show');
});

