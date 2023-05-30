<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
  
<!-- Mirrored from sun-themes.com/html/fooday/menu-grid-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2021 01:47:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Litter Asia </title>
    <!-- Bootstrap CSS-->
    <link href="{{asset('public/frontend/assets/vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!-- IE 9-->
    <!-- Vendors-->
    <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/flexslider/flexslider.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/swipebox/css/swipebox.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/slick/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/slick/slick-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/pageloading/css/component.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/vendors/dialog/css/dialog.css')}}">
    <!-- Font-icon-->
    <link rel="stylesheet" href="{{asset('public/frontend/assets/fonts/font-icon/style.css')}}">
    <!-- Style-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/assets/css/layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/assets/css/elements.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/assets/css/extra.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/assets/css/widget.css')}}">
    <link id="colorpattern" rel="stylesheet" type="text/css" href="{{asset('public/frontend/assets/css/color/colordefault.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/assets/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/assets/css/live-settings.css')}}">
    <!-- Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <!-- Script Loading Page-->
    <script src="{{asset('public/frontend/assets/vendors/html5shiv.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/respond.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/pageloading/js/snap.svg-min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/pageloading/sidebartransition/js/modernizr.custom.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
      <link href="{{asset('public/fontawesome/css/all.css')}}" rel="stylesheet">
       <link rel="shortcut icon" href="{{asset('public/littleasia.jpg')}}" height="20%" width="20%">
  </head>
  <body>

    @php
    $setting=DB::table('settings')->first();
    @endphp 
    <div id="pagewrap" class="pagewrap">
      <div id="html-content" class="wrapper-content">
        <header>
          <div class="header-top top-layout-02">
            <div class="container">
              <div class="topbar-left">
                <div class="topbar-content">
                  <div class="item"> 
                    <div class="wg-contact"><i class="fa fa-map-marker"></i><span>160 White Oak Drive Kansas City</span></div>
                  </div>
                  <div class="item"> 
                    <div class="wg-contact"><i class="fa fa-phone"></i><span>{{$setting->phone_one}}</span></div>
                  </div>
                </div>
              </div>

@php
$social=DB::table('socials')->get();
@endphp              
              <div class="topbar-right">
                <div class="topbar-content">
                  <div class="item">
                    <ul class="socials-nb list-inline wg-social">
                      @foreach($social as $row)
                      <li><a href="{{$row->link}}" target="_blank"><i class="{{$row->icon}}"></i></a></li>
                      @endforeach
                    </ul>
                  </div>
                <!--   <div class="item">
                    <div class="wg-social"><i class="fa fa-user"></i><a href="javascript:void(0)">My Account</a></div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="header-main">
            <div class="container">
              <div class="open-offcanvas">&#9776;</div>
              <div class="utility-nav">
            <!--     <div class="dropdown dropdown-full-mobile"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="search-bar dropdown-toggle"><i class="fa fa-shopping-bag"></i></a>
                  <div class="dropdown-menu">
                    <div class="cart_lite">
                      <div class="cart_lite_list">
                        <ul>
                          <li class="cart_lite_item"><a href="product-single.html" class="cart_item_thumbnail"><img width="150" height="100" src="assets/images/product/product-circle-1h.jpg" alt="" class="img-responsive"></a>
                            <div class="cart_item_summary"><a href="product-single.html" class="cart_item_title">Caramel Frappuccino</a><span class="product-price-amount"><span class="quantity">1 × </span><span class="product-price-currencySymbol">$</span>12.0</span></div><a href="#" class="remove_from_cart_button">×</a>
                          </li>
                          <li class="cart_lite_item"><a href="product-single.html" class="cart_item_thumbnail"><img width="150" height="100" src="assets/images/product/product-circle-1k.jpg" alt="" class="img-responsive"></a>
                            <div class="cart_item_summary"><a href="product-single.html" class="cart_item_title">Chocolate Fudge Ripple</a><span class="product-price-amount"><span class="quantity">2 × </span><span class="product-price-currencySymbol">$</span>24.0</span></div><a href="#" class="remove_from_cart_button">×</a>
                          </li>
                        </ul>
                      </div>
                      <div class="cart_lite_total">
                        <p><strong>Subtotal: </strong><span class="product-price-amount"><span class="product-price-currencySymbo">$</span>60.0</span></p>
                      </div>
                      <div class="cart_lite_button"><a href="product-cart.html" class="swin-btn btn-sm"><span>View Cart</span></a><a href="product-checkout.html" class="swin-btn btn-sm"><span>Checkout</span></a></div>
                    </div>
                  </div>
                </div> -->
                <div class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="search-bar dropdown-toggle"><i class="fa fa-search"></i></a>
                  <div class="dropdown-menu">
                    <div class="search-form">
                      <form action="#">
                        <div class="input-group">
                          <input type="text" placeholder="Search" class="form-control">
                          <div class="input-group-addon"><i class="fa fa-search"></i></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

             
              <div class="header-logo"><a href="{{url('/')}}" class="logo"><img src="{{asset('public/backend/media/setting/'.$setting->image)}}" height="40%" width="40%" alt="fooday" class="logo-img"></a></div>
              <nav id="main-nav-offcanvas" class="main-nav-wrapper">
                <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
                <div class="main-nav">
                  <ul id="main-nav" class="nav nav-pills">
                    <li class="dropdown"><a href="{{url('/')}}" class="dropdown-toggle">Home</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                    </li>
@php
$category=DB::table('categories')->where('status',1)->get();
@endphp
                    <li class="dropdown current-menu-item"><a href="#" class="dropdown-toggle">
                         
                        Menu List</a><i class="fa fa-angle-down btn-open-dropdown"></i>
                      <ul class="dropdown-menu">
                        @foreach($category as $row)
                        <li><a href="{{route('menu.list',$row->id)}}">{{$row->category_name}}</a></li>
                        @endforeach
                      </ul>
                    </li>
                    <li><a href="{{route('reservation')}}">Reservation</a></li>
                    <li><a href="{{route('about.us')}}">About</a></li>
                    <li><a href="{{route('blog.list')}}">Blog List</a></li>
                    <li><a href="{{route('contact.us')}}">Contact</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </header>
        @yield('content')
        <footer>
          <div class="subscribe-section"><img src="assets/images/background/bg5.png" alt="" class="img-subscribe">
            <div class="container">
              <div class="subscribe-wrapper">
                <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">
                    <div class="subscribe-heading">
                      <h3 class="title">Subcribe Us Now</h3>
                      <div class="des">Get more news and delicious dishes everyday from us</div>
                    </div>


                    <form action="{{route('add.newslater')}}" method="post" class="widget-newsletter">
                      @csrf
                      <input name="email" placeholder="Email" class="form-control">
                      <button type="submit" class="btn btn-primary" >Subscribe</button>
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-top"></div>
          <div class="footer-main">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="ft-widget-area">
                    <div class="ft-area1">
                      <div class="swin-wget swin-wget-about">
                        <div class="clearfix"><a class="wget-logo"><img src="{{asset('public/backend/media/setting/'.$setting->image)}}" height="20%" width="20%" alt="" class="img img-responsive"></a>

@php
$social=DB::table('socials')->get();
@endphp
                          <ul class="socials socials-about list-unstyled list-inline">

                          @foreach($social as $row)
                            <li><a href="{{$row->link}}"><i class="{{$row->icon}}"></i></a></li>
                        @endforeach


                          </ul>
                        </div>
                        <div class="wget-about-content">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor.</p>
                        </div>
                        <div class="about-contact-info clearfix">
                          <div class="address-info">
                            <div class="info-icon"><i class="fa fa-map-marker"></i></div>
                            <div class="info-content">
                              <p>157 White Oak Drive Kansas City </p>
                              <p>689 Lynn Street South Boston</p>
                            </div>
                          </div>
                          <div class="phone-info">
                            <div class="info-icon"><i class="fa fa-mobile-phone"></i></div>
                            <div class="info-content">
                              <p>{{$setting->phone_one}}</p>
                              <p>{{$setting->phone_two}}</p>
                            </div>
                          </div>
                          <div class="email-info">
                            <div class="info-icon"><i class="fa fa-envelope"></i></div>
                            <div class="info-content">
                              <p>{{$setting->email}}</p>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                


              </div>
            </div>
          </div>
        </footer><a id="totop" href="#" class="animated"><i class="fa fa-angle-double-up"></i></a>
      </div>
      <div id="loader" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z" class="pageload-overlay">
        <div class="loader-wrapper">
          <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60" preserveaspectratio="none">
            <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"></path>
          </svg>
          <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
          </div>
          <div class="sk-circle sk-circle-out">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="add-to-cart-dialog" class="add-to-card-dialog dialog">
      <div class="dialog__overlay"></div>
      <div class="dialog__content">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-5">
              <div class="dialog-product-img"><img src="assets/images/product/product-full-02.jpg" alt="fooday" class="img img-responsive"></div>
            </div>
            <div class="col-md-7">
              <div class="dialog-product-title">The Cracker Barrel's Country Boy Breakfast</div>
              <div class="dialog-product-price">$25.0</div>
              <div class="product-quanlity">
                <div class="input-group">
                  <input type="text" name="quanlity" placeholder="" value="1" class="form-control"><a href="javascript:void(0)" class="quanlity-plus"><i class="fa fa-plus"></i></a><a href="javascript:void(0)" class="quanlity-minus"><i class="fa fa-minus"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="dialog-product-options">
                <p class="option-title">More Options</p>
                <div class="form-check">
                  <input id="productQuantity1" type="radio" name="productOption" value="option1" checked="" class="form-check-input">
                  <label for="productQuantity1" class="form-check-label">Aliquip ex ea commodo consequat</label>
                </div>
                <div class="form-check">
                  <input id="productQuantity2" type="radio" name="productOption" value="option2" checked="" class="form-check-input">
                  <label for="productQuantity2" class="form-check-label">Quis ullam laboris nisi ut aliquip ex ea commodo</label>
                </div>
                <div class="form-check">
                  <input id="productQuantity3" type="radio" name="productOption" value="option3" checked="" class="form-check-input">
                  <label for="productQuantity3" class="form-check-label">Commodo consequat aliquip</label>
                </div>
              </div>
              <div class="dialog-product-options">
                <p class="option-title">Other options</p>
                <div class="form-check">
                  <input id="productOption2" type="checkbox" name="" value="option3" checked="" class="form-check-input">
                  <label for="productOption2" class="form-check-label">Ullam laboris nisi ut aliquip ex ea commodo</label>
                </div>
                <div class="form-check">
                  <input id="productOption3" type="checkbox" name="" value="option3" class="form-check-input">
                  <label for="productOption3" class="form-check-label">Ut enim ad minim veniam</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="dialog-button-group"><a href="product-cart.html" class="swin-btn btn-transparent"><span>View Cart</span></a><a data-toggle="dialog" data-target="#add-to-cart-dialog" class="swin-btn open-toast"><span>Order Now</span></a></div>
        </div>
      </div>
    </div>
    <div class="add-to-card-toast toast">
      <div class="toast_content">
        <div role="alert" class="alert alert-success">
          <button type="button" aria-label="Close" class="close close-toast"><span aria-hidden="true">×</span></button><strong>Order Successfully!</strong> This message will disappearance in 5 seconds
        </div>
      </div>
    </div>
<!--     <div id="live-setting" class="hidden-sm hidden-xs"><a id="open-popup"><i class="fa fa-paint-brush"></i></a>
      <form id="popup">
        <h5 class="live-title">Site Color</h5>
        <div class="popup-inner">
          <div class="box-setting">
            <div class="pattern-color">
              <p>Pattern Color Variable:</p>
              <p class="text-small">( You can change any color as you want in source code. )</p>
              <div class="color-setting">
                <ul class="list-unstyled">
                  <li class="colordefault"><span>Default</span><a></a></li>
                  <li class="color01"><span>Pizza + Bread</span><a></a></li>
                  <li class="color02"><span>Wine</span><a></a></li>
                  <li class="color03"><span>Coffee</span><a></a></li>
                  <li class="color04"><span>Vegetable</span><a></a></li>
                  <li class="color05"><span>Cream</span><a></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <h5 class="live-title">Layout Options</h5>
        <div class="popup-inner">
          <div class="layout-setting"><a class="wide"> <span>wide</span></a><a class="boxed"> <span>boxed</span></a></div>
        </div>
        <div class="boxed-setting">
          <h5 class="live-title">Boxed layout images</h5>
          <div class="popup-inner">
            <div class="layout-boxed-bg"><a data-img="assets/images/layout-option/bg-01.jpg" class="bx-layout-img"><img src="assets/images/layout-option/bg-01.jpg" class="img img-responsive"></a><a data-img="assets/images/layout-option/bg-02.jpg" class="bx-layout-img"><img src="assets/images/layout-option/bg-02.jpg" class="img img-responsive"></a><a data-img="assets/images/layout-option/bg-03.jpg" class="bx-layout-img"><img src="assets/images/layout-option/bg-03.jpg" class="img img-responsive"></a></div>
          </div>
        </div>
      </form>
    </div> -->
    <!-- jQuery-->
    <script src="{{asset('public/frontend/assets/vendors/jquery-1.10.2.min.js')}}"></script>
    <!-- Bootstrap JavaScript-->
    <script src="{{asset('public/frontend/assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Vendors-->
    <script src="{{asset('public/frontend/assets/vendors/flexslider/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/swipebox/js/jquery.swipebox.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/slick/slick.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/jquery-countTo/jquery.countTo.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/parallax/parallax.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/gmaps/gmaps.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/audiojs/audio.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/vide/jquery.vide.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/pageloading/js/svgLoader.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/pageloading/js/classie.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/pageloading/sidebartransition/js/sidebarEffects.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/wowjs/wow.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/skrollr.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/vendors/jquery-cookie/js.cookie.js')}}"></script>
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
    <!-- Own script-->
    <script src="{{asset('public/frontend/assets/js/layout.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/elements.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/widget.js')}}"></script>

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
       <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



       <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script> 
  </body>

<!-- Mirrored from sun-themes.com/html/fooday/menu-grid-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Feb 2021 01:47:29 GMT -->
</html>