<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\BuyingController;
use App\Http\Controllers\SellingController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\ReportBuyingController;
use App\Http\Controllers\RecapBuyingController;
use App\Http\Controllers\ReportSellingController;
use App\Http\Controllers\RecapSellingController;
use App\Http\Controllers\ReportSaleController;
use App\Http\Controllers\RecapTransferController;
use App\Http\Controllers\ReportStockFirstController;
use App\Http\Controllers\ReportStockLastController;
use App\Http\Controllers\CardStockController;
use App\Http\Controllers\MutationStockController;
use App\Http\Controllers\ReportLabaLossController;
use App\Http\Controllers\ReportRecapLabaLossController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('home');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.form');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::get('currency-datatable', [CurrencyController::class, 'datatable'])->name('currency.datatable');

    Route::resources([
        'currency' => CurrencyController::class,
        // Start MODULE MC
        'buying' => BuyingController::class,
        'selling' => SellingController::class,
        'transfer' => TransferController::class,
        'delete' => DeleteController::class,
        'reportbuying' => ReportBuyingController::class,
        'recapbuying' => RecapBuyingController::class,
        'reportselling' => ReportSellingController::class,
        'recapselling' => RecapSellingController::class,
        'reportsale' => ReportSaleController::class,
        'recaptransfer' => RecapTransferController::class,
        'reportstockfirst' => ReportStockFirstController::class,
        'reportstocklast' => ReportStockLastController::class,
        'cardstock' => CardStockController::class,
        'mutationstock' => MutationStockController::class,
        'reportlabaloss' => ReportLabaLossController::class,
        'reportrecaplabaloss' => ReportRecapLabaLossController::class,
        // Finish MODULE MC
    ]);

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
