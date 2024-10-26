@extends('layouts.app')
@section('title', 'Purchase Orders')
@section('header', 'Purchase Order List')

@section('content')
<style>
            .a-tag{
            text-decoration: none;
            color: white;
        }

        .a-tag:hover {
            color: white;
        }
</style>

<div class="container mt-4">

    <div class="row align-items-center">
        <div class="col-12 col-lg-8 text-center mb-2 mb-lg-0">
            <p class="bg-warning text-center rounded-pill d-inline-block px-3 py-1">
                Bulk Order Breakdown info entry form for order No #TGML/BKJS/2321
            </p>
        </div>
        <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end gap-2">
            <div class="d-flex align-items-center bg-primary text-white px-2 py-1 rounded">
                <a href="" class="a-tag">
                    <i class="bi bi-list-ul me-2"></i>
                    <span>PO List</span>
                </a>
            </div>
            <div class="d-flex align-items-center bg-success text-white px-2 py-1 rounded">
                <a href="{{ route('purchase_order.create') }}" class="a-tag">
                    <i class="bi bi-plus-lg me-2"></i>
                    <span>New PO</span>
                </a>
            </div>
            <div class="d-flex align-items-center text-white px-2 py-1 rounded" style="background: rgb(255, 174, 0)">
                <a href="" class="a-tag">
                    <i class="bi bi-printer-fill me-2"></i>
                    <span>Print</span>
                </a>
            </div>
        </div>
    </div>

    {{-- <table class="table">
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
    </table> --}}

    {{-- {{ $purchaseOrders->links() }} <!-- Pagination links for purchase orders --> --}}



    <div class="container mt-2" style="background: rgb(247, 253, 255);">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Id</th>
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
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>john doe</td>
                        <td>john@gmail.com</td>
                        <td>100908234500</td>
                        <td>joss</td>
                        <td>house 111</td>
                        <td>New York</td>
                        <td>Warehouse 1</td>
                        <td>50</td>
                        <td>Type A</td>
                        <td>10%</td>
                        <td>
                            <div class="d-flex justify-content-around align-items-center">
                                <a href="">
                                    <i class="bi bi-pencil-square bg-success text-white px-2 py-1 rounded"
                                       title="Edit"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-trash bg-danger text-white px-2 py-1 rounded"
                                       title="Delete"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>john doe</td>
                        <td>john@gmail.com</td>
                        <td>100908234500</td>
                        <td>joss</td>
                        <td>house 111</td>
                        <td>New York</td>
                        <td>Warehouse 1</td>
                        <td>50</td>
                        <td>Type A</td>
                        <td>10%</td>
                        <td>
                            <div class="d-flex justify-content-around align-items-center gap-2">
                                <a href="">
                                    <i class="bi bi-pencil-square bg-success text-white px-2 py-1 rounded"
                                       title="Edit"></i>
                                </a>
                                <a href="#">
                                    <i class="bi bi-trash bg-danger text-white px-2 py-1 rounded"
                                       title="Delete"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
