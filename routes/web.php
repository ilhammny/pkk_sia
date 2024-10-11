<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/tables', function () {
    return view('components.tables'); 
})->name('tables');