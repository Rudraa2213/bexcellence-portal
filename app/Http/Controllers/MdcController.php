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


    public function edit($id)
    {
        $fetch = DB::table('mdcsqft')->where('mdc_id', $id)->first();

        $mdc_u_id = $fetch->mdc_u_id;

        $mdc_items = DB::table('mdcsqft_items')->where('mdc_u_id', $mdc_u_id)->get();


        return view('13sqft-mdc-edit', compact('fetch', 'mdc_items'));
    }

    public function updateItems(Request $request)
    {
        $mdc_id = $request->mdc_id;
        $project_id = $request->project_id;
        $serial_no = $request->serial_no;
        $mdc_u_id = $request->mdc_u_id;
        $client_po_no = $request->client_po_no;

        $client_name = addslashes($request->client_name);
        $client_date = addslashes($request->client_date);
        $location_code = addslashes($request->location_code);
        $location_name = addslashes($request->location_name);
        $contact_name = addslashes($request->contact_name);
        $contact_no = addslashes($request->contact_no);
        $address = addslashes($request->address);
        DB::table('mdcsqft')
            ->where('mdc_id', $mdc_id)
            ->update([
                'client_name' => $client_name,
                'client_date' => $client_date,
                'project_id' => $project_id,
                'serial_no' => $serial_no,
                'client_po_no' => $client_po_no,
                'location_code' => $location_code,
                'location_name' => $location_name,
                'contact_name' => $contact_name,
                'contact_no' => $contact_no,
                'address' => $address,
            ]);
        foreach ($request->item as $index => $item) {
            $item = addslashes($request->item[$index]);
            $qty = addslashes($request->qty[$index]);
            $unit = addslashes($request->unit[$index]);
            $mdc_items_id = $request->mdc_items_id[$index];
            DB::table('mdcsqft_items')
                ->where('mdc_items_id', $mdc_items_id)
                ->update([
                    'item' => $item,
                    'qty' => $qty,
                    'unit' => $unit,
                ]);
        }

        return redirect()->route('13sqft-mdc-edit', ['id' => $mdc_id])->with('success', 'MDC and items updated successfully!');
    }


}
