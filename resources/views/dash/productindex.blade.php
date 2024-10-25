@extends('dash.layouts.temp')

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

    <div class="mt-3">
        <div class="d-flex justify-content-end align-items-center">
            <a href="{{ route('addbuyer') }}" class="bg-success text-white px-3 py-2 rounded a-tag">
                <i class="bi bi-plus-lg"></i>
                <span>Add New Product</span>
            </a>
        </div>

        <div class="mt-2" style="background: rgb(247, 253, 255)">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Company</th>
                        <th>Building</th>
                        <th>Street</th>
                        <th>Suburb</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Postcode</th>
                        <th>Country</th>
                        <th>Instructions</th>
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
                        <td>
                            <div class="col-6 col-md-6 col-lg-1 text-center">
                                <div class="d-flex justify-content-around align-items-center h-100 gap-1">
                                    <a href="{{ route('editbuyer') }}">
                                        <i class="bi bi-pencil-square bg-success text-white px-2 py-1 rounded copy-btn" title="Copy"
                                        onclick="copyRow(this)"></i>
                                    </a>
                                    <a href="">
                                        <i class="bi bi-trash bg-danger text-white px-2 py-1 rounded" title="Delete"
                                        onclick="deleteRow(this)"></i>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
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
                        <td>
                            <div class="col-6 col-md-6 col-lg-1 text-center">
                                <div class="d-flex justify-content-around align-items-center h-100 gap-1">
                                    <a href="{{ route('editbuyer') }}">
                                        <i class="bi bi-pencil-square bg-success text-white px-2 py-1 rounded copy-btn" title="Copy"
                                        onclick="copyRow(this)"></i>
                                    </a>
                                    <a href="">
                                        <i class="bi bi-trash bg-danger text-white px-2 py-1 rounded" title="Delete"
                                        onclick="deleteRow(this)"></i>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
