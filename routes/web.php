<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MdcController;
use App\Http\Controllers\WccController;
use App\Http\Controllers\PoController;
use App\Http\Controllers\PurchaseOrderController;


Route::get('/', function () {
    return view('index');
});

Route::get('/13sqft/13sqft-dashboard', function () {
    return view('13sqft-dashboard');
});

Route::get('/13sqft/13sqft-mdc', function () {
    return view('13sqft-mdc');
});

Route::get('/13sqft/13sqft-mdc-add', function () {
    return view('13sqft-mdc-add');
});
Route::get('/13sqft/13sqft-mdc-pdf', function () {
    return view('13sqft-mdc-pdf');
});

Route::get('/13sqft/13sqft-wcc', function () {
    return view('13sqft-wcc');
});

Route::get('13sqft/13sqft-wcc-add', function () {
    return view('13sqft-wcc-add');
});
Route::get('/13sqft/13sqft-wcc-pdf', function () {
    return view('13sqft-wcc-pdf');
});

Route::get('/13sqft/13sqft-po', function () {
    return view('13sqft-po');
});

Route::get('13sqft/13sqft-po-add', function () {
    return view('13sqft-po-add');
});
Route::get('/13sqft/13sqft-po-pdf', function () {
    return view('13sqft-po-pdf');
});

Route::get('/13sqft/13sqft-delivery-challan', function () {
    return view('13sqft-delivery-challan');
});

Route::get('13sqft/13sqft-delivery-challan-add', function () {
    return view('13sqft-delivery-challan-add');
});
Route::get('/13sqft/13sqft-delivery-challan-pdf', function () {
    return view('13sqft-delivery-challan-pdf');
});

Route::get('/13sqft-mdc/add', [MdcController::class, 'create'])->name('mdc.create');
Route::post('/mdc/store', [MdcController::class, 'store'])->name('mdc.store');
Route::post('wcc/store', [WccController::class, 'store'])->name('wcc.store');

Route::post('/purchase-order/store', [PoController::class, 'store'])->name('purchase-order.store');

Route::middleware(['auth'])->group(function () {
    Route::get('purchase-orders/create', [PurchaseOrderController::class, 'create'])
        ->name('purchase-orders.create');
        
    Route::post('purchase-orders/search', [PurchaseOrderController::class, 'search'])
        ->name('purchase-orders.search');
        
    Route::post('delivery-challans', [PurchaseOrderController::class, 'store'])
        ->name('delivery-challans.store');
});