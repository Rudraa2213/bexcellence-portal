<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MdcController;
use App\Http\Controllers\WccController;

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

Route::get('/13sqft-mdc/add', [MdcController::class, 'create'])->name('mdc.create');
Route::post('/mdc/store', [MdcController::class, 'store'])->name('mdc.store');
Route::post('wcc/store', [WccController::class, 'store'])->name('wcc.store');
