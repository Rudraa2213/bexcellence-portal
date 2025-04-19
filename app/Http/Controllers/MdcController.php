<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MdcController extends Controller
{
    public function create()
    {
        return view('mdc.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string',
            'date' => 'required|date',
            'project_id' => 'required|string',
            'serial_no' => 'required|string',
            'client_po_no' => 'required|string',
            'location_code' => 'required|string',
            'location_name' => 'required|string',
            'contact_person' => 'required|string',
            'contact_no' => 'required|string',
            'site_address' => 'required|string',
            'item' => 'required|array',
            'qty' => 'required|array',
            'unit' => 'required|array',
        ]);

        return redirect()->back()->with('success', 'MDC added successfully!');
    }
}
