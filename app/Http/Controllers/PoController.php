<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoController extends Controller
{
    public function store(Request $request)
    {
        return redirect()->back()->with('success', 'Purchase Order saved successfully!');
    }
}