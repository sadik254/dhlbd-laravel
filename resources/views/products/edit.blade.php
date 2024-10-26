@extends('layouts.app')

@section('content')
<div class="container mt-4 py-2" style="background: rgb(230, 243, 255)">
    <form action="">
        <div class="row g-3">
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Product Code</label>
                    <input type="text" class="form-control" name="product_code" id="product_code" placeholder="Product Code">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Product Name</label>
                    <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Product Name">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Product Category</label>
                    <select class="form-select" id="product_category" name="product_category" aria-label="Default select example">
                        <option selected>Select product categories</option>
                            <option value="">Item 1</option>
                            <option value="">Item 2</option>
                            <option value="">Item 3</option>
                      </select>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Product Subcategory</label>
                    <select class="form-select" id="product_subcategory" name="product_subcategory" aria-label="Default select example">
                        <option selected>Select product Sub categories</option>
                            <option value="">Item 1</option>
                            <option value="">Item 2</option>
                            <option value="">Item 3</option>
                      </select>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Description">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Brand</label>
                    <input type="text" class="form-control" name="brand" id="brand" placeholder="suburb">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Season</label>
                    <input type="text" class="form-control" name="season" id="season" placeholder="Season">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Collection</label>
                    <input type="text" class="form-control" name="collection" id="collection" placeholder="Collection">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Barcode</label>
                    <input type="text" class="form-control" name="barcode" id="barcode" placeholder="Barcode">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">SKU</label>
                    <input type="text" class="form-control" name="sku" id="sku" placeholder="SKU">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Size Range</label>
                    <input type="text" class="form-control" name="size_range" id="size_range" placeholder="Size Range">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Fit Type</label>
                    <input type="text" class="form-control" name="fit_type" id="fit_type" placeholder="Fit Type">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Size Chart</label>
                    <input type="text" class="form-control" name="size_chart" id="size_chart" placeholder="Size Chart">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Material Composition</label>
                    <input type="text" class="form-control" name="material_composition" id="material_composition" placeholder="Material Composition">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Base Price</label>
                    <input type="number" class="form-control" name="base_price" id="base_price" placeholder="Base Price">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Retails Price</label>
                    <input type="text" class="form-control" name="retails_price" id="retails_price" placeholder="Retails Price">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Wholesale Price</label>
                    <input type="text" class="form-control" name="wholesale_price" id="wholesale_price" placeholder="Wholesale Price">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Cost Price</label>
                    <input type="text" class="form-control" name="cost_price" id="cost_price" placeholder="Cost Price">
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="bg-success border-0 rounded px-4 py-1 mb-3 fw-bold text-white text-center"
                style="font-size: 20px">Save</button>
        </div>
    </form>
</div>
@endsection
