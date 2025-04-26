<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveryChallanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $limit = $request->input('limit', 10);
        $limit = ($limit === 'All') ? 100000 : $limit;

        $query = DB::table('dcsqftdata')->orderBy('dcsqftdata_id', 'desc');

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('dc_id', 'like', "%{$search}%")
                    ->orWhere('po_id', 'like', "%{$search}%")
                    ->orWhere('client_name', 'like', "%{$search}%")
                    ->orWhere('dcsqftdata_id', 'like', "%{$search}%");
            });
        }

        $totalDeliveryChallan = $query->paginate($limit)->appends([
            'search' => $search,
            'limit' => $limit,
        ]);
        return view('13sqft-delivery-challan', compact(
            'totalDeliveryChallan'
        ));
    }
}
