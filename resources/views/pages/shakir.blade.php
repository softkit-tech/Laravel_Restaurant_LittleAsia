@extends('layouts.app')

@section('content')



            <div class="slider-section" id="home">
                <!-- START MAIN CONTAINER -->
                <div id="home-slider" class="owl-carousel" style=" display:block;">
                    <div class="item">
                        <div class="slider-items" style="background-image: url(images/slider/1.jpg)">
                            <div class="slide-item">
                                 <div class="slider-item">
                                    <h2>Welcome To <span>VoJon</span></h2>
                                    <span class="slider-divider"></span>
                                    <p>We use only the best ingredients from all over <br>the world to carefully create an amazing dish for you</p>
                                    <a class="vojon-btn" href="#reservation">BOOK A TABLE</a><!-- book table -->
                                </div><!-- end of /.slider acption -->
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-items" style="background-image: url(images/slider/2.jpg)">
                            <div class="slide-item">
                                <div class="slider-item">
                                    <h2>Art of Cooking</h2>
                                    <span class="slider-divider"></span>
                                    <p>We use only the best ingredients from all over the world<br> to carefully create an amazing dish for you</p>
                                    <a class="vojon-btn"  href="#">SEE OUR MENU</a><!-- book table -->
                                </div><!-- end of /.slider acption -->
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-items" style="background-image: url(images/slider/3.jpg)">
                            <div class="slide-item">
                                <div class="slider-item">
                                    <h2>Are You Hungry?</h2>
                                    <span class="slider-divider"></span>
                                    <p>We use only the best ingredients from all over the world<br> to carefully create an amazing dish for you</p>
                                    <a class="vojon-btn" href="#">CALL FOR ORDER</a><!-- book table -->
                                </div><!-- end of /.slider acption -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-navigation">
                    <a class="btn vojon-btn home-next"><i class="fa fa-angle-left"></i></a>
                    <a class="btn vojon-btn home-prev"><i class="fa fa-angle-right"></i></a>
                </div><!-- END OF /. OWL CONTROLAR -->
            </div><!-- END OF /. MAIN CONTAINER -->


    <div class="section menu-section" id="menu">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box  col-md-6 col-md-offset-3">
                            <h1>Our Menu</h1><!-- title -->
                            <span class="title-divider"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                        </div><!-- end of /.section title box -->
                    </div><!-- end of /.row -->

     @php
$category=DB::table('categories')->where('status',1)->get();
@endphp               
                    <div class="row">
                        <ul class="filter-nav">
                              @foreach($category as $row)
                           <a href="{{route('menu.list',$row->id)}}"> <li class="button active milestone-counter" data-category="all">{{$row->category_name}} <b class="stat-count highlight">72</b></li>
                           </a>

                              @endforeach
                           
                        </ul>
                    </div>
                    <div class="row">
                        <div class="menu gallery">
                           
                           @foreach($menu as $row)
                            <div class="menu-items col-sm-3 dinner" data-category="post-transition">
                                <a href="{{asset('public/backend/media/menu/'.$row->image)}}" data-gal="prettyPhoto[gallery1]">
                                    <img src="{{asset('public/backend/media/menu/'.$row->image)}}" width="270" height="270" alt="">
                                    <div class="menu-item">
                                         <h2>{{$row->menu_name}}</h2>
                                         <h3>TK:{{$row->menu_price}}</h3>
                                    </div>
                                </a>
                            </div>
                          @endforeach
                        
                        </div>
                       
                    </div>
                </div><!-- end of /.container -->
            </div><!-- end of /.menu section -->            

            <div class="section about-section" id="about">
                <div class="container">
                    <div class="row">
                        <div class="about-caption section-title-box col-md-6 col-md-offset-3">
                            <h1>About Us</h1>
                            <span class="title-divider">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                            </span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                        </div><!-- end about caption -->
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="about-content">
                                <h3>WHO WE ARE</h3>
                                <p>Sed mauris massa, rutrum eget dignissim in, maximus non mauris. Maecenas vestibulum blandit mauris. Sed mauris massa, rutrum eget dignissim in. Maximus non mauris. Maecenas vestibulum blandit mauris, quis cursus ex aliquam vitae. Fusce iaculis, sem eu facilisis fermentum, quam ligula consectetur sem, et feugiat ligula eros a erat. Aliquam id bibendum nibh, quis pretium nulla. Maximus non mauris. Maecenas vestibulum blandit mauris, quis cursus ex aliquam vitae. Fusce iaculis, sem eu facilisis fermentum, quam ligula consectetur sem, et feugiat ligula eros a erat. Aliquam id bibendum nibh, quis pretium nulla et.</p>
                                <a href="#" class="vojon-btn">Resever Now </a>
                                <a href="#" class="vojon-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-thumb">
                                <img src="{{asset('public/front/images/chef-2.png')}}" class="img-responsive" width="360" height="427" alt="">
                            </div>
                        </div>
                    </div>
                </div><!-- end of /.container -->
            </div><!-- end of /.about section -->

           

            <div class="section reservation-section" id="reservation">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box col-md-6 col-md-offset-3">
                            <h1>Reservation</h1>
                            <span class="title-divider">
                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                            </span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                        </div><!-- end about caption -->
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <form class="reservation-form row" id="reservation-form" action="{{route('add.reservision')}}" name="contactform" method="post">
                                @csrf
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="InputName" name="InputName" placeholder="NAME" required="required" >
                                        <i class="fa fa-pencil-square-o"></i>
                                    </div><!-- end of /.time group -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="InputPhoneNumber" name="InputPhoneNumber" placeholder="PHONE NUMBER" required="required">
                                        <i class="fa fa-phone"></i>
                                    </div><!-- end of /.phone number group -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="InputEmail1" name="InputEmail1" placeholder="EMAIL" required="required">
                                        <i class="fa fa-envelope-o"></i>
                                    </div><!-- end of /.email group -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="InputNumberPerson" name="InputNumberPerson" placeholder="NUMBER OF PERSON" required="required">
                                        <i class="fa fa-user"></i>
                                    </div><!-- end of /.number person group -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="date" class="form-control" id="InputDate" name="InputDate" placeholder="DATE" required="required">
                                        <i class="fa fa-calendar-o"></i>
                                    </div><!-- end of /. date group -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="datetime" class="form-control" id="InputTime" name="InputTime" placeholder="TIME" required="required">
                                        <i class="fa fa-clock-o"></i>
                                    </div><!-- end of /.time group -->
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <select class="form-control" name="Type">
                                            <option value="PertyReservision">Perty Reservision</option>
                                            <option value="PersonalReservision">Personal Reservision</option>
                                        </select>
                                       
                                    </div><!-- end of /.number person group -->
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group message-group">
                                        <textarea name="MESSAGE" id="MESSAGE" cols="30" rows="5" placeholder="MESSAGE OR ANY SPECIAL REQUEST"></textarea>
                                        <i class="fa fa-comments" aria-hidden="true"></i>
                                </div><!-- end of /.message group -->
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="vojon-btn" id="res-submit" >BOOK NOW</button>
                                </div>
                            </form><!-- end of /.form -->
                            <div id="alert"></div>
                        </div><!-- end of /.columns 6 -->
                    </div><!-- end of /.roe -->
                </div><!-- end of /.container -->
            </div><!-- end of /.reservation swction -->

        

       
    <div class="section menu-section" id="say">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box  col-md-6 col-md-offset-3">
                            <h1>Our Say</h1><!-- title -->
                            <span class="title-divider"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                        </div><!-- end of /.section title box -->
                    </div><!-- end of /.row -->

                
                    <div class="row">
                        
                    </div>
                    <div class="row">
                        <div class="menu gallery">
                           
                           @foreach($team as $row)
                            <div class="menu-items col-sm-3 dinner" data-category="post-transition">
                                <a href="{{asset('public/backend/media/team/'.$row->image)}}" data-gal="prettyPhoto[gallery1]">
                                    <img src="{{asset('public/backend/media/team/'.$row->image)}}" width="270" height="270" alt="">
                                    <div class="menu-item">
                                         <h2>{{$row->team_name}}</h2>
                                         <h3>{{$row->designation}}</h3>
                                     
                                    </div>
                                </a>
                            </div>
                          @endforeach
                        
                        </div>
                       
                    </div>
                </div><!-- end of /.container -->
            </div><!-- end of /.menu section -->     

          


           



            <div class="section contact-section" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="section-title-box col-md-6 col-md-offset-3">
                            <h1>Contact Us</h1><!-- title -->
                            <span class="title-divider"><i class="fa fa-cutlery" aria-hidden="true"></i> </span>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                        </div><!-- end of /.section title box -->
                    </div><!-- end of /.row -->
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 address-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="contact-items">
                                        <i class="fa fa-map-marker"></i>
                                        <span>Porgit Labora, Main Dal St, Rober. <br>Ahner 4706 N Leavitt St Chicago,</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="contact-items">
                                        <i class="fa fa-phone"></i>
                                <span>(123) 456-7890<br>(123) 456-7890</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="contact-items">
                                        <i class="fa fa-clock-o"></i>
                                        <span>Saturday - Tuesday 08:00 - 23:59</span>
                                        <span>Wednesday - Friday 10:00 - 22:00</span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end of /.address box -->
                    </div><!-- end of /.row -->
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 contact-box">
                            <form class="row" id="contact-form" action="{{route('add.contact')}}" name="contactform" method="post" >
                                @csrf
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email Address">
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea name="comments" class="form-control" id="comments" placeholder="Message"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="vojon-btn message-btn contact-submit" id="submit">Send Message</button>
                                </div>
                            </form><!-- end form -->
                            <div id="message"></div>

                        </div><!-- end of /.column anf contact -->
                    </div>
                </div><!-- end of /.container -->
            </div><!-- end of /.contact section -->


            <div id="map"></div><!-- end of /.map -->



@endsection