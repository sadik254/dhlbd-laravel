@extends('dash.layouts.temp')

@section('content')
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #038819;
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
                    <a href="" class="a-tag">
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

        <div class="py-4" style="background: rgb(230, 243, 255)">
            <div class="row g-3 text-center px-2">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-column">
                        <label for="">P/O <span class="text-danger fw-bold">(Single P/O Only)</span></label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-column">
                        <label for="">Style Name/No</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="d-flex flex-column">
                        <label for="">Unit Price($)</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="d-flex flex-column">
                        <label for="">Order Rcv. Date</label>
                        <input type="date" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="d-flex flex-column">
                        <label for="">Shipment Date</label>
                        <input type="date" class="form-control" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row g-3 text-center mt-1 px-2">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-column">
                        <label for="">Destination</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-column">
                        <label for="">Delivery At</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="d-flex flex-column">
                        <label for="">Order Qty</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="d-flex flex-column">
                        <label for="">Breakdown Type</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-2">
                    <div class="d-flex flex-column">
                        <label for="">Excess Cut(%)</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3" style="background: rgb(247, 253, 255)">
            <table>
                <thead>
                    <tr>
                        <th>S/L</th>
                        <th>P/O No</th>
                        <th>Style Name/No</th>
                        <th>Unit Price($)</th>
                        <th>Order Rcv. Date</th>
                        <th>Shipment Date</th>
                        <th>Destination</th>
                        <th>Delivery At</th>
                        <th>Order Qty</th>
                        <th>Breakdown Type</th>
                        <th>Excess Cut(%)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PO12345</td>
                        <td>Style001</td>
                        <td>100.00</td>
                        <td>2024-10-25</td>
                        <td>2024-11-01</td>
                        <td>New York</td>
                        <td>Warehouse 1</td>
                        <td>50</td>
                        <td>Type A</td>
                        <td>10%</td>
                        <td>
                            <div class="col-6 col-md-6 col-lg-1 text-center">
                                <div class="d-flex justify-content-around align-items-center h-100 gap-1">
                                    <i class="bi bi-copy bg-success text-white px-2 py-1 rounded copy-btn"
                                       title="Copy" onclick="copyRow(this)"></i>
                                    <i class="bi bi-trash bg-danger text-white px-2 py-1 rounded"
                                       title="Delete" onclick="deleteRow(this)"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PO12345</td>
                        <td>Style001</td>
                        <td>100.00</td>
                        <td>2024-10-25</td>
                        <td>2024-11-01</td>
                        <td>New York</td>
                        <td>Warehouse 1</td>
                        <td>50</td>
                        <td>Type A</td>
                        <td>10%</td>
                        <td>
                            <div class="col-6 col-md-6 col-lg-1 text-center">
                                <div class="d-flex justify-content-around align-items-center h-100 gap-1">
                                    <i class="bi bi-copy bg-success text-white px-2 py-1 rounded copy-btn"
                                       title="Copy" onclick="copyRow(this)"></i>
                                    <i class="bi bi-trash bg-danger text-white px-2 py-1 rounded"
                                       title="Delete" onclick="deleteRow(this)"></i>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-2">
            <div>
                <button type="submit" class="bg-success text-white border-0 rounded px-2 py-1">Save PO Info</button>
            </div>
            <div class="d-flex gap-2">
                <div class="text-white rounded px-2 py-1" style="background: rgb(255, 174, 0)">
                    <a href="" class="a-tag">
                        <i class="bi bi-plus-lg"></i>
                        <span>More Info</span>
                    </a>
                </div>
                <div class="text-white rounded px-2 py-1" style="background: rgb(255, 174, 0)">
                    <a href="" class="a-tag">
                        <i class="bi bi-plus-lg"></i>
                        <span>More Size</span>
                    </a>
                </div>
            </div>
        </div>

    </div>


    <script>
        function copyRow(element) {
            // Get the parent row of the clicked copy button
            const row = element.closest('tr');
            // Get all the text content from the row
            const rowData = Array.from(row.cells).map(cell => cell.textContent).join('\t');

            // Create a temporary textarea element to hold the text
            const tempTextarea = document.createElement('textarea');
            tempTextarea.value = rowData;
            document.body.appendChild(tempTextarea);

            // Select and copy the text
            tempTextarea.select();
            document.execCommand('copy');

            // Remove the temporary element
            document.body.removeChild(tempTextarea);

            // Optional: Alert the user that the data has been copied
            alert('Row copied to clipboard!');
        }

        function deleteRow(element) {
            // Get the parent row of the clicked delete button and remove it
            const row = element.closest('tr');
            row.remove();
        }
    </script>
@endsection
