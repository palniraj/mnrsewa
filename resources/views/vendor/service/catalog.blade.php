@extends('frontend.layouts.master')
@section('title')Search @endsection
@section('content')


<div class="container" style="margin: 4%">
    <div class=" con-w3l">
        @foreach ($services as $service)
            <div class="col-md-4 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal{{$service->id}}" class="offer-img">
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

@foreach ($services as $service)		 
<div class="modal fade" id="myModal{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="col-md-5 span-2">
                    <div class="item">
                        <img src="{{asset('uploads/service/'.$service->image)}}" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-md-7 span-1 ">
                    <h3>{{$service->name}}</h3>
                  <strong>  <p class="in-para"> {{$service->user->name}}</p></strong>
                    <div class="price_single">
                        <span class="reducedfrom ">Rs.{{$service->price}}</span>

                        <div class="clearfix"></div>
                    </div>
                    <h4 class="quick">Quick Overview:</h4>
                    <p class="quick_desc"> {!! $service->description !!}</p>
                    <div class="add-to">
                       <a href="{{route('cart', $service->id)}}" class="btn btn-danger my-cart-btn my-cart-b">Book Now</a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection