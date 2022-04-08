@extends('frontend.layouts.master')
@section('title')Cart @endsection

@section('content')

<div class="container" style="margin: 5%">
<h3>Your cart</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        @forelse ($allItems as $serviceId => $item)
            <tr>
                <td scope="row">{{ $item['name'] }}</td>
                <td>{{ $item['price'] }}</td>
                <td>
                    <a class="btn btn-danger btn-sm" href="{{ route('cart.reduce', $serviceId) }}">
                        <i class="fas fa-minus"></i>
                    </a>

                        {{ $item['qty'] }}
                    <a class="btn btn-success btn-sm" href="{{ route('cart', $serviceId) }}">
                        <i class="fas fa-plus"></i>
                    </a>
                </td>

                <td>
                    <a href="{{ route('cart.delete', $serviceId) }}">delete</a>
                </td>
            </tr>

        @empty
                <tr>
                    <td>No items in cart</td>
                </tr>

        @endforelse

        </tbody>
    </table>


    <div class="row">

    <h4>Total Price: Rs. {{ \App\Models\Cart::totalPrice() }}</h4>

    </div>

    <div class="row">

        <a href="{{route('cart.checkout')}}"  class="btn btn-success">Proceed to checkout</a>
    </div>

</div>
@endsection
