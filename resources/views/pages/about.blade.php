   @extends('layouts.app')

  @section('content')

  <div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-about">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">About Us</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">We bring to you the unforgetable moment with our delicious dishes</div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            
            <section class="team-section padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="swin-sc swin-sc-title">
                      <p class="top-title"><span>Meet Our</span></p>
                      <h3 class="title">Awesome Master Chefs</h3>
                    </div>
                  
                    <div class="swin-sc swin-sc-team-slider">
                         @foreach($all_about as $row)
                      <div class="team-item swin-transition wow fadeInLeft">
                   
                        <div class="team-img-wrap">
                          <div class="team-img"><img src="{{asset('public/backend/media/team/'.$row->image)}}" alt="" class="img img-responsive"></div>
                        </div>
                        <p class="team-name">{{$row->team_name}}</p>
                        <p class="team-position">{{$row->designation}}</p>
                        <hr>
                       <!--  <ul class="socials-nb list-inline">
                          <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
                          <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        </ul> -->
                      
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