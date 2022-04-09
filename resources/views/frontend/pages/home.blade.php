@extends('frontend.layouts.master')
@section('title')Home @endsection
@section('content')
     <!---->
     <div data-vide-bg="video/video">
         <div class="container">
             <div class="banner-info">
                 <h3>Make your work easy by all in one online service platform </h3>
                 <div class="search-form">
                     <form action="{{route('service.search')}}" method="GET">
                         <input type="text" placeholder="Find your perfect service today..." name="query">
                         <input type="submit" value="">
                     </form>
                 </div>
             </div>
         </div>
     </div>
     <script>
         window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')
     </script>
     <script src="js/jquery.vide.min.js"></script>

     <!--content-->
     <div class="content-top ">
         <div class="container ">
             <div class="spec ">
                 <h3>Recommended For You</h3>
                 <div class="ser-t">
                     <b></b>
                     <span><i></i></span>
                     <b class="line"></b>
                 </div>
             </div>
             <div class="tab-head ">
                 <nav class="nav-sidebar">
                     <ul class="nav tabs ">
                         <li class="active"><a href="#tab1" data-toggle="tab">IT Services</a></li>
                         <li class=""><a href="#tab2" data-toggle="tab">Health Serives</a></li>
                         <li class=""><a href="#tab3" data-toggle="tab">Household Services</a></li>
                     </ul>
                 </nav>
                 <div class=" tab-content tab-content-t ">
                     <div class="tab-pane active text-style" id="tab1">
						 
						 <div class=" con-w3l">
							 @foreach ($itservices as $itservice)
                             <div class="col-md-3 m-wthree">
                                 <div class="col-m">
                                     <a href="#" data-toggle="modal" data-target="#myModal{{$itservice->id}}" class="offer-img">
                                         <img src="{{asset('uploads/service/'.$itservice->image)}}" class="img-responsive" alt="">
                                         <div class="offer">
                                             <p><span>{{$itservice->price_badge}}</span></p>
                                         </div>
                                     </a>
                                     <div class="mid-1">
                                         <div class="women">
                                             <h6><a href="single.html">{{$itservice->name}}</a></h6>
                                         </div>
                                         <div class="mid-2">
                                             <p><em class="item_price">Rs. {{$itservice->price}}</em></p> <br>
											<strong><p><em class="item_price ">{{ $itservice->user->name }}</em></p></strong>
                                             <div class="block">
                                                 <div class="starbox small ghosting"> </div>
                                             </div>
                                             <div class="clearfix"></div>
                                         </div>
                                         <div class="add">
											<a href="{{route('cart', $itservice->id)}}" class="btn btn-danger my-cart-btn my-cart-b">Book Now</a>
										</div>

                                     </div>
                                 </div>
                             </div>
							 @endforeach
                         
                             <div class="clearfix"></div>
                         </div>
                     </div>
                     <div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
							@foreach ($healthservices as $healthservice)
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal{{$healthservice->id}}" class="offer-img">
										<img src="{{asset('uploads/service/'.$healthservice->image)}}" class="img-responsive" alt="">
										<div class="offer">
											<p><span>{{$healthservice->price_badge}}</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">{{$healthservice->name}}</a></h6>
										</div>
										<div class="mid-2">
											<p><em class="item_price">Rs. {{$healthservice->price}}</em></p> <br>
										<strong>	<p><em class="item_price">{{ $healthservice->user->name }}</em></p></strong>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
										   <a href="{{route('cart', $healthservice->id)}}" class="btn btn-danger my-cart-btn my-cart-b">Book Now</a>
									   </div>

									</div>
								</div>
							</div>
							@endforeach
						
							<div class="clearfix"></div>
						</div>
                     </div>
                     <div class="tab-pane  text-style" id="tab3">
						<div class=" con-w3l">
							@foreach ($householdservices as $householdservice)
							<div class="col-md-3 m-wthree">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal{{$householdservice->id}}" class="offer-img">
										<img src="{{asset('uploads/service/'.$householdservice->image)}}" class="img-responsive" alt="">
										<div class="offer">
											<p><span>{{$householdservice->price_badge}}</span></p>
										</div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">{{$householdservice->name}}</a></h6>
										</div>
										<div class="mid-2">
											<p><em class="item_price">Rs. {{$householdservice->price}}</em></p> <br>
										<strong>	<p><em class="item_price">{{ $householdservice->user->name }}</em></p></strong>
											<div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
										   <a href="{{route('cart', $householdservice->id)}}" class="btn btn-danger my-cart-btn my-cart-b">Book Now</a>
									   </div>

									</div>
								</div>
							</div>
							@endforeach
						
							<div class="clearfix"></div>
						</div>
                     </div>
                
                 </div>
             </div>

         </div>
     </div>
     </div>

     <!--content-->
     <div class="content-mid">
         <div class="container">

             <div class="col-md-4 m-w3ls">
                 <div class="col-md1 ">
                     <a href="kitchen.html">
                         <img src="images/co1.jpg" class="img-responsive img" alt="">
                         <div class="big-sa">
                             <h6>Join mnrSewa </h6>
                             <h3>As<span> Our Partners </span></h3>
                             <p>There are many variations of passages of Lorem Ipsum available, but the majority </p>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-md-4 m-w3ls1">
                 <div class="col-md ">
                     <a href="hold.html">
                         <img src="images/co.jpg" class="img-responsive img" alt="">
                         <div class="big-sale">
                             <div class="big-sale1">
                                 <h3>Big <span>Sale</span></h3>
                                 <p>It is a long established fact that a reader </p>
                             </div>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="col-md-4 m-w3ls">
                 <div class="col-md2 ">
                     <a href="kitchen.html">
                         <img src="images/co2.jpg" class="img-responsive img1" alt="">
                         <div class="big-sale2">
                             <h3>Great <span>Services</span></h3>
                             <p>It is a long established fact that a reader </p>
                         </div>
                     </a>
                 </div>
                 <div class="col-md3 ">
                     <a href="hold.html">
                         <img src="images/co3.jpg" class="img-responsive img1" alt="">
                         <div class="big-sale3">
                             <h3>Health<span>lifes</span></h3>
                             <p>It is a long established fact that a reader </p>
                         </div>
                     </a>
                 </div>
             </div>
             <div class="clearfix"></div>
         </div>
     </div>
     <!--content-->
     <!-- Carousel
    ================================================== -->
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
             <li data-target="#myCarousel" data-slide-to="1"></li>
             <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner" role="listbox">
             <div class="item active">
                 <a href="kitchen.html"> <img class="first-slide" src="images/ba.jpg" alt="First slide"></a>

             </div>
             <div class="item">
                 <a href="care.html"> <img class="second-slide " src="images/ba1.jpg" alt="Second slide"></a>

             </div>
             <div class="item">
                 <a href="hold.html"><img class="third-slide " src="images/ba2.jpg" alt="Third slide"></a>

             </div>
         </div>

     </div><!-- /.carousel -->

     <!--content-->
     <div class="product">
         <div class="container">
             <div class="spec ">
                 <h3>Special Offers</h3>
                 <div class="ser-t">
                     <b></b>
                     <span><i></i></span>
                     <b class="line"></b>
                 </div>
             </div>
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
                                    <strong> <p><em class="item_price">{{ $service->user->name }}</em></p></strong>
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
         </div>
     </div>


     <!-- service -->
	 @foreach ($healthservices as $healthservice)		 
     <div class="modal fade" id="myModal{{$healthservice->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
             <div class="modal-content modal-info">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                             aria-hidden="true">&times;</span></button>
                 </div>
                 <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                         <div class="item">
                             <img src="{{asset('uploads/service/'.$healthservice->image)}}" class="img-responsive" alt="">
                         </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                         <h3>{{$healthservice->name}}</h3>
                       <strong>  <p class="in-para"> {{$healthservice->user->name}}</p></strong>
                         <div class="price_single">
                             <span class="reducedfrom ">Rs.{{$healthservice->price}}</span>

                             <div class="clearfix"></div>
                         </div>
                         <h4 class="quick">Quick Overview:</h4>
                         <p class="quick_desc"> {!! $healthservice->description !!}</p>
                         <div class="add-to">
							<a href="{{route('cart', $healthservice->id)}}" class="btn btn-danger my-cart-btn my-cart-b">Book Now</a>
                         </div>
                     </div>
                     <div class="clearfix"> </div>
                 </div>
             </div>
         </div>
     </div>
	 @endforeach
	 {{-- it services --}}
	 @foreach ($itservices as $itservice)		 
     <div class="modal fade" id="myModal{{$itservice->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
             <div class="modal-content modal-info">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                             aria-hidden="true">&times;</span></button>
                 </div>
                 <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                         <div class="item">
                             <img src="{{asset('uploads/service/'.$itservice->image)}}" class="img-responsive" alt="">
                         </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                         <h3>{{$itservice->name}}</h3>
                       <strong>  <p class="in-para"> {{$itservice->user->name}}</p></strong>
                         <div class="price_single">
                             <span class="reducedfrom ">Rs.{{$itservice->price}}</span>

                             <div class="clearfix"></div>
                         </div>
                         <h4 class="quick">Quick Overview:</h4>
                         <p class="quick_desc"> {!! $itservice->description !!}</p>
                         <div class="add-to">
							<a href="{{route('cart', $itservice->id)}}" class="btn btn-danger my-cart-btn my-cart-b">Book Now</a>
                         </div>
                     </div>
                     <div class="clearfix"> </div>
                 </div>
             </div>
         </div>
     </div>
	 @endforeach

	 @foreach ($householdservices as $householdservice)		 
     <div class="modal fade" id="myModal{{$householdservice->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
             <div class="modal-content modal-info">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                             aria-hidden="true">&times;</span></button>
                 </div>
                 <div class="modal-body modal-spa">
                     <div class="col-md-5 span-2">
                         <div class="item">
                             <img src="{{asset('uploads/service/'.$householdservice->image)}}" class="img-responsive" alt="">
                         </div>
                     </div>
                     <div class="col-md-7 span-1 ">
                         <h3>{{$householdservice->name}}</h3>
                       <strong>  <p class="in-para"> {{$householdservice->user->name}}</p></strong>
                         <div class="price_single">
                             <span class="reducedfrom ">Rs.{{$householdservice->price}}</span>

                             <div class="clearfix"></div>
                         </div>
                         <h4 class="quick">Quick Overview:</h4>
                         <p class="quick_desc"> {!! $householdservice->description !!}</p>
                         <div class="add-to">
							<a href="{{route('cart', $householdservice->id)}}" class="btn btn-danger my-cart-btn my-cart-b">Book Now</a>
                         </div>
                     </div>
                     <div class="clearfix"> </div>
                 </div>
             </div>
         </div>
     </div>
	 @endforeach
     <!-- service -->


@endsection
