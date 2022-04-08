 <!-- mnrsewa -->
 @php
      $servicecategories = \App\Models\ServiceCategory::where('is_featured', 'on')->where('status', 'active')->pluck('name');
 @endphp
 <!DOCTYPE html>
 <html>

 <head>
     <title>@yield('title')|mnrSewa - Make your work easy through mnrsewa | all in one online service platform</title>
     <!-- for-mobile-apps -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta property="og:title" content="Vide" />
     <meta name="keywords"
         content="mnrSewa, Make your work easy by all in one online service platform, all in one service," />
     <script type="application/x-javascript">
         addEventListener("load", function() {
             setTimeout(hideURLbar, 0);
         }, false);

         function hideURLbar() {
             window.scrollTo(0, 1);
         }
     </script>
     <!-- //for-mobile-apps -->
     <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
     <!-- Custom Theme files -->
     <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
     {{-- fontawesome --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
     <!-- js -->
     <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
     <!-- //js -->
     <!-- start-smoth-scrolling -->
     <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
     <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
     <script type="text/javascript">
         jQuery(document).ready(function($) {
             $(".scroll").click(function(event) {
                 event.preventDefault();
                 $('html,body').animate({
                     scrollTop: $(this.hash).offset().top
                 }, 1000);
             });
         });
     </script>
     <!-- start-smoth-scrolling -->
     <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
     <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
     <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
     <!--- start-rate---->
     <script src="{{asset('js/jstarbox.js')}}"></script>
     <link rel="stylesheet" href="{{asset('css/jstarbox.css')}}" type="text/css" media="screen" charset="utf-8" />
     <script type="text/javascript">
         jQuery(function() {
             jQuery('.starbox').each(function() {
                 var starbox = jQuery(this);
                 starbox.starbox({
                     average: starbox.attr('data-start-value'),
                     changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass(
                         'clickonce') ? 'once' : true,
                     ghosting: starbox.hasClass('ghosting'),
                     autoUpdateAverage: starbox.hasClass('autoupdate'),
                     buttons: starbox.hasClass('smooth') ? false : starbox.attr(
                         'data-button-count') || 5,
                     stars: starbox.attr('data-star-count') || 5
                 }).bind('starbox-value-changed', function(event, value) {
                     if (starbox.hasClass('random')) {
                         var val = Math.random();
                         starbox.next().text(' ' + val);
                         return val;
                     }
                 })
             });
         });
     </script>
     <!---//End-rate---->

 </head>

 <body>
     <div class="header">

         <div class="container">

             <div class="logo">
                 <img src="{{ asset('/images/mnrSewa_dlogo.png') }}" alt="" height="150">
                 {{-- <h1 ><a href="{{route('frontend.home')}}"><b>M<br>N<br>R</b>Sewa<span>All in one Service platform</span></a></h1> --}}
             </div>
             <div class="head-t">
                 <ul class="card">
                     <li><a href="wishlist.html"><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
                     <li><a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                     <li><a href="{{ route('company.register') }}"><i class="fa fa-arrow-right"
                                 aria-hidden="true"></i>Join as Company</a></li>
                     <li><a href="{{ route('freelancer.register') }}"><i class="fa fa-arrow-right"
                                 aria-hidden="true"></i>Join as Freelancer</a></li>
                     <li><a href="{{ route('customer.register') }}"><i class="fa fa-arrow-right"
                                 aria-hidden="true"></i>Register as Customer</a></li>
                     <li><a href="tel:+977-9810631146"><i class="fa fa-phone" aria-hidden="true"></i>9810631146</a>
                     </li>
                     <li><a href="tel:+977-9868715191"><i class="fa fa-phone" aria-hidden="true"></i>9868715191</a>
                     </li>
                     <li><a href="mailto:palniraj21@gmail.com"><i class="fa fa-envelope-o"
                                 aria-hidden="true"></i>palniraj21@gmail.com</a></li>
                 </ul>
             </div>

             <div class="header-ri">
                 <ul class="social-top">
                     <li><a href="https://www.facebook.com/nirajpal.com.np/" class="icon facebook"><i
                                 class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                     <li><a href="https://www.twitter.com/palniraj21" class="icon twitter"><i class="fa fa-twitter"
                                 aria-hidden="true"></i><span></span></a></li>
                     <li><a href="https://www.youtube.com/c/nirajpal/" class="icon youtube"><i class="fa fa-youtube"
                                 style="color: red" aria-hidden="true"></i><span></span></a></li>
                     <li><a href="https://www.linkedin.com/in/niraj-pal/" class="icon linkedin"><i
                                 class="fa fa-linkedin" style="color: blue" aria-hidden="true"></i><span></span></a>
                     </li>
                     <li><a href="https://www.github.com/palniraj" class="icon github"><i class="fa fa-github"
                                 aria-hidden="true"></i><span></span></a></li>

                 </ul>
             </div>
         </div>
		 <div class="mx-5" style="padding-left: 5%; padding-right:5%">
         <div class="nav-top">
             <nav class="navbar navbar-default">

                 <div class="navbar-header nav_2">
                     <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                         data-target="#bs-megadropdown-tabs">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>
                 </div>

                 <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                     <ul class="nav navbar-nav ">
                         <li class=" active"><a href="{{ route('frontend.home') }}"
                                 class="hyper "><span>Home</span></a></li>

                         <li class="dropdown ">

                             <a href="#" class="dropdown-toggle  hyper"
                                 data-toggle="dropdown"><span>{{ $servicecategories[0] }}<b
                                         class="caret"></b></span></a>

                             <ul class="dropdown-menu multi">
                                 <div class="row">
                                     <div class="col-sm-3">
                                         <ul class="multi-column-dropdown">

                                             <li><a href="kitchen.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Water & Beverages</a></li>
                                             <li><a href="kitchen.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Fruits & Vegetables</a></li>
                                             <li><a href="kitchen.html"> <i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Staples</a></li>
                                             <li><a href="kitchen.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Branded Food</a></li>

                                         </ul>

                                     </div>
                                     <div class="col-sm-3">

                                         <ul class="multi-column-dropdown">
                                             <li><a href="kitchen.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Breakfast &amp; Cereal</a></li>
                                             <li><a href="kitchen.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Snacks</a></li>
                                             <li><a href="kitchen.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Spices</a></li>
                                             <li><a href="kitchen.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Biscuit &amp; Cookie</a></li>
                                             <li><a href="kitchen.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Sweets</a></li>

                                         </ul>

                                     </div>
                                     <div class="col-sm-3">

                                         <ul class="multi-column-dropdown">
                                             <li><a href="kitchen.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Pickle & Condiment</a></li>
                                             <li><a href="kitchen.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Instant Food</a></li>
                                             <li><a href="kitchen.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Dry Fruit</a></li>
                                             <li><a href="kitchen.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Tea &amp; Coffee</a></li>

                                         </ul>
                                     </div>
                                     <div class="col-sm-3 w3l">
                                         <a href="kitchen.html"><img src="images/me.png" class="img-responsive"
                                                 alt=""></a>
                                     </div>
                                     <div class="clearfix"></div>
                                 </div>
                             </ul>
                         </li>
                         <li class="dropdown">

                             <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown"><span>
                                     {{ $servicecategories[1] }} <b class="caret"></b></span></a>
                             <ul class="dropdown-menu multi multi1">
                                 <div class="row">
                                     <div class="col-sm-3">
                                         <ul class="multi-column-dropdown">
                                             <li><a href="care.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i> Ayurvedic </a></li>
                                             <li><a href="care.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Baby Care</a></li>
                                             <li><a href="care.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Cosmetics</a></li>
                                             <li><a href="care.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Deo & Purfumes</a></li>

                                         </ul>

                                     </div>
                                     <div class="col-sm-3">

                                         <ul class="multi-column-dropdown">
                                             <li><a href="care.html"> <i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Hair Care </a></li>
                                             <li><a href="care.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Oral Care</a></li>
                                             <li><a href="care.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Personal Hygiene</a></li>
                                             <li><a href="care.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Skin care</a></li>

                                         </ul>

                                     </div>
                                     <div class="col-sm-3">

                                         <ul class="multi-column-dropdown">
                                             <li><a href="care.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i> Fashion Accessories </a></li>
                                             <li><a href="care.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Grooming Tools</a></li>
                                             <li><a href="care.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Shaving Need</a></li>
                                             <li><a href="care.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Sanitary Needs</a></li>

                                         </ul>
                                     </div>
                                     <div class="col-sm-3 w3l">
                                         <a href="care.html"><img src="images/me1.png" class="img-responsive"
                                                 alt=""></a>
                                     </div>
                                     <div class="clearfix"></div>
                                 </div>
                             </ul>
                         </li>
                         <li class="dropdown">
                             <a href="#" class="dropdown-toggle hyper"
                                 data-toggle="dropdown"><span>{{ $servicecategories[2] }}<b
                                         class="caret"></b></span></a>
                             <ul class="dropdown-menu multi multi2">
                                 <div class="row">
                                     <div class="col-sm-3">
                                         <ul class="multi-column-dropdown">
                                             <li><a href="hold.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Cleaning Accessories</a></li>
                                             <li><a href="hold.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>CookWear</a></li>
                                             <li><a href="hold.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Detergents</a></li>
                                             <li><a href="hold.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Gardening Needs</a></li>

                                         </ul>

                                     </div>
                                     <div class="col-sm-3">

                                         <ul class="multi-column-dropdown">
                                             <li><a href="hold.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Kitchen & Dining</a></li>
                                             <li><a href="hold.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>KitchenWear</a></li>
                                             <li><a href="hold.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Pet Care</a></li>
                                             <li><a href="hold.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Plastic Wear</a></li>

                                         </ul>

                                     </div>
                                     <div class="col-sm-3">

                                         <ul class="multi-column-dropdown">
                                             <li><a href="hold.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Pooja Needs</a></li>
                                             <li><a href="hold.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Serveware</a></li>
                                             <li><a href="hold.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Safety Accessories</a></li>
                                             <li><a href="hold.html"><i class="fa fa-angle-right"
                                                         aria-hidden="true"></i>Festive Decoratives </a></li>

                                         </ul>
                                     </div>
                                     <div class="col-sm-3 w3l">
                                         <a href="hold.html"><img src="images/me2.png" class="img-responsive"
                                                 alt=""></a>
                                     </div>
                                     <div class="clearfix"></div>
                                 </div>
                             </ul>
                         </li>

                         <li><a href="codes.html" class="hyper"> <span>{{ $servicecategories[3] }}</span></a>
                         </li>
                         <li><a href="contact.html"
                                 class="hyper"><span>{{ $servicecategories[4] }}</span></a></li>
                         <li><a href="contact.html"
                                 class="hyper"><span>{{ $servicecategories[5] }}</span></a></li>
                         <li><a href="contact.html"
                                 class="hyper"><span>{{ $servicecategories[6] }}</span></a></li>
                         <li><a href="contact.html"
                                 class="hyper"><span>{{ $servicecategories[7] }}</span></a></li>

								 <li class="dropdown ">

									<a href="#" class="dropdown-toggle  hyper"
										data-toggle="dropdown"><span>Others<b
												class="caret"></b></span></a>
	   
									<ul class="dropdown-menu multi">
										<div class="row">
											<div class="col-sm-3">
												<ul class="multi-column-dropdown">
	   
													<li><a href="kitchen.html"><i class="fa fa-angle-right"
																aria-hidden="true"></i>Water & Beverages</a></li>
													<li><a href="kitchen.html"><i class="fa fa-angle-right"
																aria-hidden="true"></i>Fruits & Vegetables</a></li>
													<li><a href="kitchen.html"> <i class="fa fa-angle-right"
																aria-hidden="true"></i>Staples</a></li>
													<li><a href="kitchen.html"><i class="fa fa-angle-right"
																aria-hidden="true"></i>Branded Food</a></li>
													<li><a href="kitchen.html"><i class="fa fa-angle-right"
																aria-hidden="true"></i>Pickle & Condiment</a></li>
													<li><a href="kitchen.html"><i class="fa fa-angle-right"
																aria-hidden="true"></i>Instant Food</a></li>
													<li><a href="kitchen.html"><i class="fa fa-angle-right"
																aria-hidden="true"></i>Dry Fruit</a></li>
													<li><a href="kitchen.html"><i class="fa fa-angle-right"
																aria-hidden="true"></i>Tea &amp; Coffee</a></li>
	   
												</ul>
											</div>
											<div class="col-sm-3 w3l">
												<a href="kitchen.html"><img src="images/me.png" class="img-responsive"
														alt=""></a>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>

                     </ul>
                 </div>
             </nav>
             
             <div class="cart">
                <a class="nav-link m-0 p-0" href="{{ route('cart.view') }}">
                    <i class="fas fa-cart-plus text-danger"></i>
                    Cart
                    <span class="badge badge-success">{{ \App\Models\Cart::totalItems() }}</span>
                </a>
             </div>
             {{-- <div class="cart">
                 <span class="fa fa-shopping-cart my-cart-icon"><span
                         class="badge badge-notify my-cart-badge"></span></span>
             </div> --}}
             <div class="clearfix"></div>
         </div>
         </div>


     </div>



     @yield('content')

  
     <!--footer-->
     <div class="footer">
        <div class="container">
            <div class="col-md-3 footer-grid">
                <h3>About Us</h3>
                <p>Nam libero tempore, cum soluta nobis est eligendi
                    optio cumque nihil impedit quo minus id quod maxime
                    placeat facere possimus.</p>
            </div>
            <div class="col-md-3 footer-grid ">
                <h3>Menu</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="kitchen.html">Kitchen</a></li>
                    <li><a href="care.html">Personal Care</a></li>
                    <li><a href="hold.html">Household</a></li>
                    <li><a href="codes.html">Short Codes</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid ">
                <h3>Customer Services</h3>
                <ul>
                    <li><a href="shipping.html">Shipping</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="faqs.html">Faqs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="offer.html">Online Shopping</a></li>

                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h3>My Account</h3>
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>

                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="footer-bottom">
                <h2><a href="index.html"><b>M<br>N<br>R</b>Sewa<span>All in One Service Platform</span></a></h2>
                <p class="fo-para">Make your work easy by all in one online service platform</p>
                <ul class="social-fo">
                    <li><a href="https://www.facebook.com/nirajpal.com.np/" class=" face"><i
                                class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/c/nirajpal/" class=" pin"><i
                                class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.twitter.com/palniraj21" class=" twi"><i class="fa fa-twitter"
                                aria-hidden="true"></i></a></li>
                    <li><a href="https://www.github.com/palniraj" class=""
                            style="background: black"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/niraj-pal/" class=" twi"><i
                                class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
                <div class=" address">
                    <div class="col-md-4 fo-grid1">
                        <p><i class="fa fa-home" aria-hidden="true"></i>Mahendrangar, Kanchanpur Nepal</p>
                    </div>
                    <div class="col-md-4 fo-grid1">
                        <p><i class="fa fa-phone" aria-hidden="true"></i><a
                                href="tel:+977-9810631146">+977-9810631146</a>, <a href="tel:+977-9868715191">+977
                                9868715191</a></p>
                    </div>
                    <div class="col-md-4 fo-grid1">
                        <p><a href="mailto:contact@nirajpal.com.np"><i class="fa fa-envelope-o"
                                    aria-hidden="true"></i>contact@nirajpal.com.np</a></p>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
            <div class="copy-right">
                <p> &copy; {{ now()->year }} mnrSewa. All Rights Reserved | Developed by <a
                        href="http://nirajpal.com.np/"> NPLgroup | A Final Year Project TU SNSC CSIT 2074 Batch</a></p>
            </div>
        </div>
    </div>
    <!-- //footer-->

    <!-- smooth scrolling -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    <!-- //smooth scrolling -->
    <!-- for bootstrap working -->
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <!-- //for bootstrap working -->
    <script type='text/javascript' src="{{asset('js/jquery.mycart.js')}}"></script>
    <script type="text/javascript">
        $(function() {

            var goToCartIcon = function($addTocartBtn) {
                var $cartIcon = $(".my-cart-icon");
                var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>')
                    .css({
                        "position": "fixed",
                        "z-index": "999"
                    });
                $addTocartBtn.prepend($image);
                var position = $cartIcon.position();
                $image.animate({
                    top: position.top,
                    left: position.left
                }, 500, "linear", function() {
                    $image.remove();
                });
            }

            $('.my-cart-btn').myCart({
                classCartIcon: 'my-cart-icon',
                classCartBadge: 'my-cart-badge',
                affixCartIcon: true,
                checkoutCart: function(products) {
                    $.each(products, function() {
                        console.log(this);
                    });
                },
                clickOnAddToCart: function($addTocart) {
                    goToCartIcon($addTocart);
                },
                getDiscountPrice: function(products) {
                    var total = 0;
                    $.each(products, function() {
                        total += this.quantity * this.price;
                    });
                    return total * 1;
                }
            });

        });
    </script>

    
 </body>

 </html>