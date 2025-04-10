<?php

use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\BuyingController;
use App\Http\Controllers\SellingController;
use App\Http\Controllers\TransferStokController;
use App\Http\Controllers\ViewHapusController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resources([
    'currency' => CurrencyController::class,
    // MODULE MC
    'buying' => BuyingController::class,
    'selling' => SellingController::class,
    'transfer' => TransferStokController::class,
    'viewhapus' => ViewHapusController::class
]);

Route::post('logout', function () {
    return redirect()->route('login');
})->name('logout');