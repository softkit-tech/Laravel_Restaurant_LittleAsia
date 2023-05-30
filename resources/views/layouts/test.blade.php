<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from revolthemes.net/demo/vojon/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 08:05:43 GMT -->
<head>
        <!-- META TAG -->
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

        <!-- WEBSITE TITLE -->
        <title>Soft Kit Technology</title>

        <!-- FAVICON -->
        <link rel="icon" href="images/favicon.png">
        <link rel="icon" href="images/favicon.png" sizes="57x57">
        <link rel="icon" href="images/favicon.png" sizes="72x72">
        <link rel="icon" href="images/favicon.png" sizes="114x114">
        <link rel="icon" href="images/favicon.png" sizes="144x144">

        <!--YOUR STYLE -->
        <link rel="stylesheet" href="{{asset('public/front/css/style.css')}}">
        

        <!-- SKINS THEME -->
        <link href="#" rel="stylesheet" media="screen" class="skin">
        <!-- Example -->
        <!--<link href="css/skin/blue.css" rel="stylesheet" media="screen" class="skin">  -->

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
    </head>
    <body>

      <!--   <div id="preloader">
            <div id="loader-wrapper">
                <div class="cssload-loader">vo<span>j</span>on</div>
            </div>
        </div> -->

        <div class="wrapper">
            <!-- Start Navigation -->
            <nav class="navigation-section navbar navbar-default bootsnav">
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('/')}}">vojon</a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right" id="top-menu">
                            <li class="active"><a href="{{url('/')}}">HOME</a></li>
                            <li><a href="#menu">MENU</a></li>
                          
                            <li><a href="#reservation">RESERVATION </a></li>
                             <li><a href="#about">ABOUT</a></li>
                            <li><a href="#blog">BLog </a></li>
                            <li><a href="#contact">CONTACT</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!-- End Navigation -->





   
    @yield('content')

          
           


          

            

            <div class="section subscribe-section"  id="subscribe">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box col-md-6 col-md-offset-3">
                            <h1>Newslatter</h1><!-- end section title -->
                            <span class="title-divider"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                        </div><!-- end of /.section title box  -->
                    </div><!-- end of.row -->
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 subscribe-box">
                            <form id="mc-form" class="form-inline subscribe-form">
                                <div class="form-area">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="email" name="EMAIL" id="mc-email" placeholder="Your e-mail" class="rounded input-38 form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Subscribe</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                     <label for="mc-email" class="subscribe-message"></label>
                                </div>
                            </form>
                        </div><!-- end of /.subscribe box -->
                    </div><!-- end of /.row -->
                </div><!-- end of /.container -->
            </div><!-- end of /.sunscribe section -->







            <div class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 social-item">
                            <div class="top-btn">
                                <a class="top-button " href="#" id="easy-top" >
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="footer-social-box">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div><!-- end of /.footer social media-->
                        </div><!-- end of /. column 12 -->
                    </div>
                    <div class="row">
                        <div class="col-md-12 copyright">
                            <p>Made with <i class="fa fa-heart"></i> by <a href="https://revolthemes.net/" target="_blank">Revolthemes</a>. All Rights Reserved</p>
                        </div><!-- end column -->
                    </div><!-- end of /.row -->
                </div><!-- end of /.container -->
            </div><!-- end of /.footer section -->
        </div><!-- END OF /. WRAPPER -->

        <!-- JQUERY -->
        <script src="{{asset('public/front/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- BOOTSTRAP -->
        <script src="{{asset('public/front/js/vendor/bootstrap.min.js')}}"></script>
        <!-- PRETTYPHOTO -->
        <script src="{{asset('public/front/js/jquery.prettyPhoto.js')}}"></script>
        <!-- OWL -->
        <script src="{{asset('public/front/js/owl.carousel.min.js')}}"></script>
        <!-- ISOTOPE -->
        <script src="{{asset('public/front/js/isotope.pkgd.min.js')}}"></script>
        <!-- PLACEHOLDEM -->
        <script src="{{asset('public/front/js/placeholdem.min.js')}}"></script>
        <!-- PARALLAX -->
        <script src="{{asset('public/front/js/jquery.parallax-1.1.3.js')}}"></script>
        <!-- COUNTER UP -->
        <script src="{{asset('public/front/js/jquery.counterup.min.js')}}"></script>
        <!-- WAYPOINTS -->
        <script src="{{asset('public/front/js/waypoints.min.js')}}"></script>
        <!-- SMOTHSCROLL -->
        <script src="{{asset('public/front/js/smoothscroll.min.js')}}"></script>
        <!-- BOOTSNAV -->
        <script src="{{asset('public/front/js/bootsnav.js')}}"></script>
        <!-- GOOGLE MAP -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxYLtelXg0PGjeTiFDtlN7nrH_47buDWo"></script>
        <!-- AJAXCHIMP JS -->
        <script src="{{asset('public/front/js/jquery.ajaxchimp.min.js')}}"></script>
        <!-- CUSTOM JS -->
        <script src="{{asset('public/front/js/custom.js')}}"></script>
        <!-- MAP -->
        <script src="{{asset('public/front/js/map.js')}}"></script>

    </body>

<!-- Mirrored from revolthemes.net/demo/vojon/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 08:05:43 GMT -->
</html>
