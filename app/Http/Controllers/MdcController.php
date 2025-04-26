<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MdcController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $limit = $request->input('limit', 10);
        $limit = ($limit === 'All') ? 100000 : $limit;
        $query = DB::table('mdcsqft')->orderBy('mdc_id', 'desc');

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('client_name', 'like', "%{$search}%")
                    ->orWhere('client_po_no', 'like', "%{$search}%")
                    ->orWhere('project_id', 'like', "%{$search}%");
            });
        }

        $totalMDC = $query->paginate($limit)->appends([
            'search' => $search,
            'limit' => $limit,
        ]);
        return view('13sqft-mdc', compact(
            'totalMDC'
        ));
    }

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
