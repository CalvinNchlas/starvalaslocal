<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// MODULE MC
Route::get('cms/buying', function () {
    return view('cms/buying/index');
})->name('cms/buying');
Route::get('cms/selling', function () {
    return view('cms/selling/index');
})->name('cms/selling');
Route::get('cms/transfer', function () {
    return view('cms/transfer/index');
})->name('cms/transfer');
Route::get('cms/viewhapus', function () {
    return view('cms/viewhapus/index');
})->name('cms/viewhapus');
