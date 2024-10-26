@extends('layouts.app')

@section('content')
<div class="container mt-4 py-2" style="background: rgb(245, 245, 245)">
    <form action="">
        <div class="row g-3">
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="john doe">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="john@gmail.com">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Phone</label>
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="0123456789">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Company</label>
                    <input type="text" class="form-control" name="company" id="company" placeholder="company">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Building</label>
                    <input type="text" class="form-control" name="building" id="building" placeholder="building">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Street</label>
                    <input type="text" class="form-control" name="street" id="street" placeholder="street">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Suburb</label>
                    <input type="text" class="form-control" name="suburb" id="suburb" placeholder="suburb">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">City</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="city">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">State</label>
                    <input type="text" class="form-control" name="state" id="state" placeholder="state">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Postcode</label>
                    <input type="text" class="form-control" name="postcode" id="postcode" placeholder="postcode">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Country</label>
                    <input type="text" class="form-control" name="country" id="country" placeholder="country">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column">
                    <label for="" class="fw-bold">Instructions</label>
                    <input type="text" class="form-control" name="instructions" id="instructions" placeholder="instructions">
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
