@extends('layouts.app')

@section('content')
        <div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Menu List </div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Welcome to Visit My resturent </div>
              </div>
            </div>
          </div>

@php
$category=DB::table('categories')->get();
@endphp          
          <div class="page-content-wrapper">
            <section class="product-sesction-02 padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="swin-sc swin-sc-title style-3">
                  <p class="title"><span>MENU ITEM</span></p>
                </div>
                <div class="swin-sc swin-sc-product products-02 carousel-02">
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div data-slide-toshow="5" class="cat-wrapper-02 main-slider col-md-8">
                      @foreach($category as $row)
                      <div class="item">
                        <a href="{{route('menu.list',$row->id)}}">
                        <div class="cat-icons"><i class="icons swin-icon-pasta"></i>
                          <h5 class="cat-title">Breakfast</h5>
                        </div>
                      </div>
                      </a>
                      @endforeach
                 
                 
                    
                    </div>
                    <div class="col-md-2"></div>
                  </div>
                  <div class="products nav-slider">
                    <div class="row slick-padding">
                    @foreach($menus as $menu)

                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-item item swin-transition">
                          <a href="">
                          <div class="block-img"><img src="{{asset('public/backend/media/menu/'.$menu->image)}}" alt="" class="img img-responsive">

                            <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">TK:</span>{{$menu->menu_price}}</span></div>
                            <!-- <div class="group-btn"><a href="javascript:void(0)" class="swin-btn btn-link"><i class="icons fa fa-link"></i></a><a href="javascript:void(0)" class="swin-btn btn-add-to-card"><i class="fa fa-shopping-basket"></i></a></div> -->
                          </div>
                        </a>
                          <div class="block-content">
                            <h5 class="title"><a href="">{{$menu->menu_name}}</a></h5>
                            <div class="product-info">
                              <ul class="list-inline">
                                <!-- <li class="author"><span>Chef</span><span class="text">Don Joe</span></li> -->
                                <!-- <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li> -->
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div> 
                    @endforeach
                    </div>
                  
                    
                   
                   
                  </div>
                </div>
                
              </div>
            </section>
          
           
          </div>
        </div>
      @endsection