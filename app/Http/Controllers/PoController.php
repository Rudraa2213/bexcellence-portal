<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $limit = $request->input('limit', 10);
        $limit = ($limit === 'All') ? 100000 : $limit;

        $query = DB::table('posqftdata')
            ->leftJoin('posqftdataitemdetails', 'posqftdata.posqftdata_id', '=', 'posqftdataitemdetails.posqftdata_id')
            ->select(
                'posqftdata.*',
                DB::raw('SUM(posqftdataitemdetails.total) as total_value')
            )
            ->groupBy('posqftdata.posqftdata_id')
            ->orderBy('posqftdata.posqftdata_id', 'desc');

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('client_name', 'like', "%{$search}%")
                    ->orWhere('po_id', 'like', "%{$search}%")
                    ->orWhere('project_location', 'like', "%{$search}%")
                    ->orWhere('material_delivery_address', 'like', "%{$search}%")
                    ->orWhere('posqftdata.posqftdata_id', 'like', "%{$search}%");
            });
        }

        $totalPO = $query->paginate($limit)->appends([
            'search' => $search,
            'limit' => $limit,
        ]);

        return view('13sqft-po', compact('totalPO'));
    }
}
