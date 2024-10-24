@extends('layouts.app') 
@section('title', 'Purchase Orders')
@section('header', 'Purchase Order List')

@section('content')
<div class="container">
    <h1>Purchase Orders and Order Items</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>PO Number</th>
                <th>Style Name/No</th>
                <th>Unit Price</th>
                <th>Order Receive Date</th>
                <th>Shipment Date</th>
                <th>Destination</th>
                <th>Delivery At</th>
                <th>Order Qty</th>
                <th>Breakdown Type</th>
                <th>Excess Cut</th>
                <th>SL No</th>
                <th>Color</th>
                <th>Item Name</th>
                <th>Style Article No</th>
                <th>Lab Dip No</th>
                <th>Approve Option</th>
                <th>Match Ref</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($purchaseOrders as $order)
                @php
                    // Get related order items for the current purchase order
                    $orderItems = $order->orderItems; // Assuming you have a relation defined
                @endphp
                @if($orderItems->isEmpty())
                    <tr>
                        <td>{{ $order->po_number }}</td>
                        <td>{{ $order->style_name_no }}</td>
                        <td>{{ $order->unit_price }}</td>
                        <td>{{ $order->order_receive_date }}</td>
                        <td>{{ $order->shipment_date }}</td>
                        <td>{{ $order->destination }}</td>
                        <td>{{ $order->delivery_at }}</td>
                        <td>{{ $order->order_qty }}</td>
                        <td>{{ $order->breakdown_type }}</td>
                        <td>{{ $order->excess_cut }}</td>
                        <td colspan="7">No items available</td>
                        <td>
                            <!-- Actions (edit/delete) -->
                        </td>
                    </tr>
                @else
                    @foreach($orderItems as $item)
                        <tr>
                            @if($loop->first) <!-- Only show order details for the first item -->
                                <td rowspan="{{ $orderItems->count() }}">{{ $order->po_number }}</td>
                                <td rowspan="{{ $orderItems->count() }}">{{ $order->style_name_no }}</td>
                                <td rowspan="{{ $orderItems->count() }}">{{ $order->unit_price }}</td>
                                <td rowspan="{{ $orderItems->count() }}">{{ $order->order_receive_date }}</td>
                                <td rowspan="{{ $orderItems->count() }}">{{ $order->shipment_date }}</td>
                                <td rowspan="{{ $orderItems->count() }}">{{ $order->destination }}</td>
                                <td rowspan="{{ $orderItems->count() }}">{{ $order->delivery_at }}</td>
                                <td rowspan="{{ $orderItems->count() }}">{{ $order->order_qty }}</td>
                                <td rowspan="{{ $orderItems->count() }}">{{ $order->breakdown_type }}</td>
                                <td rowspan="{{ $orderItems->count() }}">{{ $order->excess_cut }}</td>
                            @endif
                            <td>{{ $item->sl_no }}</td>
                            <td>{{ $item->color }}</td>
                            <td>{{ $item->item_name }}</td>
                            <td>{{ $item->style_article_no }}</td>
                            <td>{{ $item->lab_dip_no }}</td>
                            <td>{{ $item->approve_option }}</td>
                            <td>{{ $item->match_ref }}</td>
                            <td>
                                <!-- Actions (edit/delete) -->
                            </td>
                        </tr>
                    @endforeach
                @endif
            @endforeach
        </tbody>
    </table>

    {{ $purchaseOrders->links() }} <!-- Pagination links for purchase orders -->
</div>
@endsection
