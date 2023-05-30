  <div class="footer-main">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="ft-widget-area">
                    <div class="ft-area1">
                      <div class="swin-wget swin-wget-about">
                        <div class="clearfix"><a class="wget-logo"><img src="{{asset('public/backend/media/setting/'.$setting->image)}}" alt="" class="img img-responsive"></a>

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