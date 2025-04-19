<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Wcc;

class WccController extends Controller
{
    public function index()
    {
        return view('13sqft-dashboard');
    }
}
