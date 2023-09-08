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
                <input type="text" name="shipping_address" id="" onclick="getLocation()" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" name="shipping_phone" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Latitude</label>
                <input type="text" name="latitude" id="latitude" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Longitude</label>
                <input type="text" name="longitude" id="longitude" class="form-control">
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

<script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.watchPosition(showPosition, showError);
        } else {
            la.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        document.getElementById("latitude").value = position.coords.latitude;
        document.getElementById("longitude").value = position.coords.longitude;
       }

    function showError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                la.innerHTML = "User denied the request for Geolocation."
                break;
            case error.POSITION_UNAVAILABLE:
                la.innerHTML = "Location information is unavailable."
                break;
            case error.TIMEOUT:
                la.innerHTML = "The request to get user location timed out."
                break;
            case error.UNKNOWN_ERROR:
                la.innerHTML = "An unknown error occurred."
                break;
        }
    }
</script>
@endsection
