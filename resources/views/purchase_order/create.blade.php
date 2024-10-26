@extends('layouts.app')
@section('title', 'Purchase Orders')
@section('header', 'Purchase Order List')

@section('content')
<div class="mt-4">
    <form action="{{ route('purchase_order.store') }}" method="POST">
        @csrf
        <div class="py-4" style="background: rgb(230, 243, 255)">
            <div class="row g-3 text-center px-2">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-column">
                        <label for="">P/O <span class="text-danger fw-bold">(Single P/O Only)</span></label>
                        <input type="text" class="form-control" name="po_number" id="po_number" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-column">
                        <label for="">Style Name/No</label>
                        <input type="text" class="form-control" name="style_name_no" id="style_name_no" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="d-flex flex-column">
                        <label for="">Unit Price($)</label>
                        <input type="text" class="form-control" name="unit_price" id="unit_price" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="d-flex flex-column">
                        <label for="">Order Rcv. Date</label>
                        <input type="date" class="form-control" name="order_receive_date" id="order_receive_date" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="d-flex flex-column">
                        <label for="">Shipment Date</label>
                        <input type="date" class="form-control" name="shipment_date" id="shipment_date" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row g-3 text-center mt-1 px-2">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-column">
                        <label for="">Destination</label>
                        <input type="text" class="form-control" name="destination" id="destination" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-column">
                        <label for="">Delivery At</label>
                        <input type="text" class="form-control" name="delivery_at" id="delivery_at" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="d-flex flex-column">
                        <label for="">Order Qty</label>
                        <input type="text" class="form-control" name="order_qty" id="order_qty" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="d-flex flex-column">
                        <label for="">Breakdown Type</label>
                        <input type="text" class="form-control" name="breakdown_type" id="breakdown_type" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="d-flex flex-column">
                        <label for="">Excess Cut(%)</label>
                        <input type="text" class="form-control" name="excess_cut" id="excess_cut" placeholder="">
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="bg-success text-white border-0 rounded px-2 py-1">Send Info</button>
            </div>

        </div>
    </form>
</div>

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
