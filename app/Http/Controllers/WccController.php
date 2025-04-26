<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Wcc;

class WccController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $limit = $request->input('limit', 10);
        $limit = ($limit === 'All') ? 100000 : $limit;
        $query = DB::table('wccsqft')->orderBy('wcc_id', 'desc');

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('client_name', 'like', "%{$search}%")
                    ->orWhere('client_po_no', 'like', "%{$search}%")
                    ->orWhere('project_id', 'like', "%{$search}%");
            });
        }

        $totalWCC = $query->paginate($limit)->appends([
            'search' => $search,
            'limit' => $limit,
        ]);

        return view('13sqft-wcc', compact(
            'totalWCC'
        ));
    }
}
