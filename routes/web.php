<?php

use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\BuyingController;
use App\Http\Controllers\SellingController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\ReportBuyingController;
use App\Http\Controllers\RecapBuyingController;
use App\Http\Controllers\ReportSellingController;
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
    'transfer' => TransferController::class,
    'delete' => DeleteController::class,
    'reportbuying' => ReportBuyingController::class,
    'recapbuying' => RecapBuyingController::class,
    'reportselling' => ReportSellingController::class,
]);

Route::post('logout', function () {
    return redirect()->route('login');
})->name('logout');