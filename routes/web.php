<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

//Student
Route::get('/students', [StudentController::class], 'index')->name('students.index');
Route::get('students/{id}', [StudentController::class], 'show')->name('students.show');
Route::get('/students/create', [StudentController::class], 'create')->name('students.create');
Route::post('/students/store', [StudentController::class], 'store')->name('students.store');
Route::get('/students/{id}/edit', [StudentController::class], 'edit')->name('students.edit');
Route::put('/students/update', [StudentController::class], 'update')->name('students.update');
Route::delete('/students/{id}/destroy', [StudentController::class], 'destroy')->name('students.destroy');