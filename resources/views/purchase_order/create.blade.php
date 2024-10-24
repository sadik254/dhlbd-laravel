@extends('layouts.app') 
@section('title', 'Purchase Orders')
@section('header', 'Purchase Order List')

@section('content')
<form action="{{ route('purchase_order.store') }}" method="POST">
    @csrf
    <div>
        <label for="po_number">PO Number</label>
        <input type="text" name="po_number" id="po_number" required>
    </div>
    
    <div>
        <label for="style_name_no">Style Name/No</label>
        <input type="text" name="style_name_no" id="style_name_no" required>
    </div>
    
    <div>
        <label for="unit_price">Unit Price</label>
        <input type="text" name="unit_price" id="unit_price">
    </div>
    
    <div>
        <label for="order_receive_date">Order Receive Date</label>
        <input type="date" name="order_receive_date" id="order_receive_date" required>
    </div>
    
    <div>
        <label for="shipment_date">Shipment Date</label>
        <input type="date" name="shipment_date" id="shipment_date" required>
    </div>
    
    <div>
        <label for="destination">Destination</label>
        <input type="text" name="destination" id="destination" required>
    </div>
    
    <div>
        <label for="delivery_at">Delivery At</label>
        <input type="text" name="delivery_at" id="delivery_at" required>
    </div>
    
    <div>
        <label for="order_qty">Order Quantity</label>
        <input type="text" name="order_qty" id="order_qty">
    </div>
    
    <div>
        <label for="breakdown_type">Breakdown Type</label>
        <input type="text" name="breakdown_type" id="breakdown_type" required>
    </div>
    
    <div>
        <label for="excess_cut">Excess Cut</label>
        <input type="text" name="excess_cut" id="excess_cut">
    </div>

    <h3>Order Items</h3>
    <div id="order-items-container">
        <div class="order-item">
            <h4>Order Item</h4>
            <label for="color">Color</label>
            <input type="text" name="order_items[0][color]" id="color">
            
            <label for="item_name">Item Name</label>
            <input type="text" name="order_items[0][item_name]" id="item_name">
            
            <!-- Add more fields as necessary -->
        </div>
    </div>
    
    <button type="button" id="add-order-item">Add Another Order Item</button>
    <button type="submit">Create Purchase Order</button>
</form>

<script>
    document.getElementById('add-order-item').addEventListener('click', function() {
        const container = document.getElementById('order-items-container');
        const index = container.getElementsByClassName('order-item').length;
        
        const newItem = `
            <div class="order-item">
                <h4>Order Item</h4>
                <label for="color">Color</label>
                <input type="text" name="order_items[${index}][color]" id="color">
                
                <label for="item_name">Item Name</label>
                <input type="text" name="order_items[${index}][item_name]" id="item_name">
                
                <!-- Add more fields as necessary -->
            </div>
        `;
        
        container.insertAdjacentHTML('beforeend', newItem);
    });
</script>
@endsection