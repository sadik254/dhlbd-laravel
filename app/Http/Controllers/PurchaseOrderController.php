<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseOrder;
use App\Models\OrderItem;
use Validator;

class PurchaseOrderController extends Controller
{
    // Show the form for creating a new Purchase Order
    public function create()
    {
        return view('purchase_order.create');
    }

    // Store a new Purchase Order
    public function store(Request $request)
    {
        // Define your validation rules
        $validator = Validator::make($request->all(), [
            'po_number' => 'required|string|max:255|unique:purchase_orders',
            'style_name_no' => 'nullable|string|max:255',
            'unit_price' => 'nullable|string|max:255',
            'order_receive_date' => 'nullable|date',
            'shipment_date' => 'nullable|date',
            'destination' => 'nullable|string|max:255',
            'delivery_at' => 'nullable|string|max:255',
            'order_qty' => 'nullable|string|max:255',
            'breakdown_type' => 'nullable|string|max:255',
            'excess_cut' => 'nullable|string|max:255',
        ]);

        // If validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new Purchase Order
        PurchaseOrder::create($request->all());

        return redirect()->route('purchase_order.index')->with('success', 'Purchase Order created successfully!');
    }

    // Show a list of Purchase Orders with pagination
    public function index()
    {
        $purchaseOrders = PurchaseOrder::paginate(10); // Adjust the pagination limit as necessary
        $orderItems = OrderItem::all();
        return view('purchase_order.index', compact('purchaseOrders', 'orderItems'));
    }

    // Show a specific Purchase Order
    public function show($id)
    {
        $purchaseOrder = PurchaseOrder::findOrFail($id);
        return view('purchase_order.show', compact('purchaseOrder'));
    }

    // Show the form for editing a Purchase Order
    public function edit($id)
    {
        $purchaseOrder = PurchaseOrder::findOrFail($id);
        return view('purchase_order.edit', compact('purchaseOrder'));
    }

    // Update an existing Purchase Order
    public function update(Request $request, $id)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'po_number' => 'required|string|max:255|unique:purchase_orders',
            'style_name_no' => 'required|string|max:255',
            'unit_price' => 'nullable|string|max:255',
            'order_receive_date' => 'required|date',
            'shipment_date' => 'required|date',
            'destination' => 'required|string|max:255',
            'delivery_at' => 'required|string|max:255',
            'order_qty' => 'nullable|string|max:255',
            'breakdown_type' => 'required|string|max:255',
            'excess_cut' => 'nullable|string|max:255',
        ]);

        // If validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update the Purchase Order
        $purchaseOrder = PurchaseOrder::findOrFail($id);
        $purchaseOrder->update($request->all());

        return redirect()->route('purchase_order.index')->with('success', 'Purchase Order updated successfully!');
    }

    // Delete a specific Purchase Order
    public function destroy($id)
    {
        $purchaseOrder = PurchaseOrder::findOrFail($id);
        $purchaseOrder->delete();

        return redirect()->route('purchase_order.index')->with('success', 'Purchase Order deleted successfully!');
    }
}

