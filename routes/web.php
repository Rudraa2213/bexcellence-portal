<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/13sqft/13sqft-dashboard', function () {
    return view('13sqft-dashboard');
});
