@extends('layouts.app')

@section('content')
    <style>
        table {
            font-family: arial, sans-serif;
            width: 100%;
        }

        td,
        th {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #dddddd;
        }

        .a-tag{
            text-decoration: none;
            color: white;
        }

        .a-tag:hover {
            color: white;
        }
    </style>

    <div class="container mt-3">
        <div class="d-flex justify-content-end align-items-center">
            <a href="{{ route('products.create') }}" class="bg-success text-white px-3 py-2 rounded a-tag">
                <i class="bi bi-plus-lg"></i>
                <span>Add New Products</span>
            </a>
        </div>

        <div class="container mt-2" style="background: rgb(247, 253, 255);">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Id</th>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Product Category</th>
                            <th>Product Subcategory</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Brand</th>
                            <th>Season</th>
                            <th>Collection</th>
                            <th>Barcode</th>
                            <th>Sku</th>
                            <th>Size Range</th>
                            <th>Fit Type</th>
                            <th>Size Chart</th>
                            <th>Material Composition</th>
                            <th>Base Price</th>
                            <th>Retail Price</th>
                            <th>Wholesale Price</th>
                            <th>Cost Price</th>
                            <th>Action</th>
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
                            <td>10%</td>
                            <td>10%</td>
                            <td>10%</td>
                            <td>10%</td>
                            <td>10%</td>
                            <td>10%</td>
                            <td>10%</td>
                            <td>10%</td>
                            <td>10%</td>
                            <td>
                                <div class="d-flex justify-content-around align-items-center">
                                    <a href="{{ route('products.edit') }}">
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
                            <td>10%</td>
                            <td>10%</td>
                            <td>10%</td>
                            <td>10%</td>
                            <td>10%</td>
                            <td>10%</td>
                            <td>10%</td>
                            <td>10%</td>
                            <td>10%</td>
                            <td>
                                <div class="d-flex justify-content-around align-items-center">
                                    <a href="{{ route('products.edit') }}">
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
