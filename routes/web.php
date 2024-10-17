<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('home');
});
Route::get('/tables', function () {
    return view('components.tables'); 
})->name('tables');
Route::get('students/class/x-a', [StudentController::class, 'showXA'])->name('students.xA');
Route::get('students/class/x-b', [StudentController::class, 'showXB'])->name('students.xB');
Route::get('students/class/x-c', [StudentController::class, 'showXC'])->name('students.xC');
Route::get('students', [StudentController::class, 'index'])->name('students.index');
