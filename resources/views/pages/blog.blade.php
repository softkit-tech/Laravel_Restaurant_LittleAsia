 @extends('layouts.app')

  @section('content')


   <div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-blog">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Newest Blog </div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">All information and stories from our blog will help you have a best meal for your day</div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            <section class="padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="page-main col-md-8">
                    <div class="blog-wrapper swin-sc-blog-list">

                      @foreach($blog_list as $row)
                      <div class="swin-sc-blog-slider style-02">
                        <div class="main-slider">
                          <div class="slides">
                            <div class="blog-item swin-transition">
                              <div class="blog-featured-img"><img src="{{asset('public/backend/media/post/'.$row->image)}}" alt="fooday" class="img img-responsive"></div>
                              <div class="blog-content">
                                <div class="blog-date"><span class="day">12</span><span class="month">Jun</span></div>
                                <div class="blog-info clearfix">
                                
                                
                                </div>
                                <h3 class="blog-title"><a href="{{route('blog.single',$row->id)}}" class="swin-transition">{{$row->post_name}}</a></h3>
                                <p class="blog-description"> {!! Str::limit($row->post_detail, 200) !!}.</p>
                                <div class="blog-readmore"><a href="{{route('blog.single',$row->id)}}" class="swin-transition">Read More <i class="fa fa-angle-double-right"></i></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
                     
                      
                     
                      <div class="pagination-wrapper">
                        <nav aria-label="Page navigation">
                         {{ $blog_list->links() }}
                        </nav>
                      </div>
                    </div>
                  </div>
                  <div class="page-sidebar col-md-4">
@php
$post_cate=DB::table('post_cates')->get()
@endphp              
                    <!-- categories-->
                    <div class="swin-widget widget-categories">
                      <div class="title-widget">Category</div>

                      <div class="widget-body widget-content clearfix">
                      @foreach($post_cate as $row)
                      	<a href="{{route('blog.wish',$row->id)}}" class="link"><i class="icons fa fa-angle-right"></i><span class="text">{{$row->name}}</span>
                     @endforeach
                      </div>
                    </div>
                    <!-- recent post-->
                  
                 
                  
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

@endsection
