@extends('frontend.layouts.master')
@section('title')Search @endsection
@section('content')


<div class="container" style="margin: 4%">
    <div class=" con-w3l">
        @foreach ($services as $service)
            <div class="col-md-4 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
                        <img src="{{ asset('uploads/service/' . $service->image) }}" class="img-responsive"
                            alt="">
                    </a>
                    <div class="offer">
                        <p><span>{{ $service->price_badge }}</span></p>
                    </div>

                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="#">{{ $service->name }}</a> </h6>
                        </div>
                        <div class="mid-2">
                            <p><em class="item_price">Rs. {{ $service->price }}</em></p> <br>
                            <p><em class="item_price">{{ $service->user->name }}</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add add-2">
                           <a href="{{route('cart', $service->id)}}" class="btn btn-danger my-cart-btn my-cart-b">Book Now</a>
                            {{-- <button class="btn btn-danger my-cart-btn my-cart-b" data-id="1"
                                data-name="product 1" data-summary="summary 1"
                                data-price="{{ $service->price }}" data-quantity="1"
                                data-image="images/of16.png">Book Now</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach



        <div class="clearfix"></div>
    </div>
    {{$services->appends(['query'=>request('query')])->render()}}
</div>

@endsection