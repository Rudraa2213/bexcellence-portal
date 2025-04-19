<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrder;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function create()
    {
        $purchaseOrders = PurchaseOrder::all();
        return view('purchase-orders.create', compact('purchaseOrders'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'po_number' => 'required|exists:purchase_orders,number'
        ]);

        $purchaseOrders = PurchaseOrder::all();
        $selectedPo = PurchaseOrder::where('number', $request->po_number)
                        ->with('items')
                        ->firstOrFail();
        
        return view('purchase-orders.create', compact('purchaseOrders', 'selectedPo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'po_id' => 'required|exists:purchase_orders,id',
            'items' => 'required|array',
            'items.*' => 'exists:purchase_order_items,id'
        ]);

        // Create delivery challan logic here
        // Example:
        // $deliveryChallan = DeliveryChallan::create([
        //     'purchase_order_id' => $request->po_id,
        //     // other fields
        // ]);
        
        // Attach selected items
        // $deliveryChallan->items()->attach($request->items);

        return redirect()->route('delivery-challans.index')
            ->with('success', 'Delivery Challan created successfully!');
    }
}