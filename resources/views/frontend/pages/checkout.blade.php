@extends('frontend.layouts.master')
@section('title')
    Checkout
@endsection

@section('content')
    <div class="container" style="margin: 5%">

        <strong>
            <h3>Delivery Information</h3>
        </strong>
        <br>
        <form action="{{ route('orders.store') }}" method="post">
            @csrf

            @include('_errors')

            <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" name="shipping_fullname" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">State</label>
                <input type="text" name="shipping_state" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">City</label>
                <input type="text" name="shipping_city" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Zip</label>
                <input type="number" name="shipping_zipcode" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Full Address</label>
                <input type="text" name="shipping_address" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" name="shipping_phone" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Latitude</label>
                <input type="text" name="latitude" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Longitude</label>
                <input type="text" name="longitude" id="" class="form-control">
            </div>

            <strong>
                <h3>Payment Information</h3>
            </strong>
            <br>
            <div class="row " style="margin-left: 1%">
                <label for="" class="">Payment Method: <span class="text-danger">*</span></label>
                <div class="form-check form-check-inline " style="color:#232323; font-size: 15x;">
                    <input class="form-check-input " type="radio" name="payment_method" id="home_delivery"
                        value="home_delivery" required>
                    <label class="form-check-label" style="font-weight: 400;" for="home_delivery">Cash On Delivery</label>
                    &nbsp;&nbsp;
                    <input class="form-check-input" type="radio" name="payment_method" id="card" value="card">
                    <label class="form-check-label" style="font-weight: 400;" for="card">Online</label>
                </div>
            </div>
            <br>
            <strong>
                <p>Total Amount:Rs. {{ \App\Models\Cart::totalPrice() }}</p>
            </strong>
            <br>
            <button type="submit" class="btn btn-primary">Place Order</button>
            <a href="{{ route('cart.view') }}" class="btn btn-primary">Back</a>

        </form>


    </div>
@endsection
