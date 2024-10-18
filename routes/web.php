<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('home');
});
Route::get('/tables', function () {
    return view('components.tables'); 
})->name('tables');
Route::resource('students', StudentController::class);

Route::get('/students/class/x-a', [StudentController::class, 'indexXa'])->name('students.xa');
Route::get('/students/class/x-b', [StudentController::class, 'indexXb'])->name('students.xb');
Route::get('/students/class/x-c', [StudentController::class, 'indexXc'])->name('students.xc');

//route untuk siswa A
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/xa_create', [StudentController::class, 'create'])->name('students.xa_create');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::get('/students/{id}/hapus', [StudentController::class, 'hapus'])->name('students.hapus');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::get('/students/class/x-a', [StudentController::class, 'indexXa'])->name('students.xa');

