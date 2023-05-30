   @extends('layouts.app')

  @section('content')

  <div class="page-container">
          <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-reservation">
            <div class="container">
              <div class="title-wrapper">
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Reservation</div>
                <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Just a few click to make the reservation online for saving your time and money</div>
              </div>
            </div>
          </div>
          <div class="page-content-wrapper">
            <section class="section-reservation-form padding-top-100 padding-bottom-100">
              <div class="container">
                <div class="section-content">
                  <div class="swin-sc swin-sc-title style-2">
                    <h3 class="title"><span>Reservation Form</span></h3>
                  </div>
                  <div class="reservation-form">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <p class="reservation-form-title text-center">We willing to help you make the reservation online to save your time and money or you can call us directly through the customer service hotline:<span class="text-default"> 225-88888</span></p>
                      </div>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="swin-sc swin-sc-contact-form light mtl">
                      <form action="{{route('reservation.store')}}" method="post">

                        @csrf
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text" name="Username" placeholder="Username" class="form-control" required="">
                          </div>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            <input type="text" name="Email" placeholder="Email" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <div class="fa fa-phone"></div>
                            </div>
                            <input type="text" name="Phone" placeholder="Phone" class="form-control" required="">
                          </div>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-male"></i></div>
                            <select type="text" name="People" placeholder="People" class="form-control">
                              <option value="1person">1 person</option>
                              <option value="2person">2 People</option>
                              <option value="3person">3 People</option>
                              <option value="4person">4 People</option>
                              <option value="5person">5 People</option>
                              <option value="6person">6 People</option>
                              <option value="7person">7 People</option>
                              <option value="8person">8 People</option>
                              <option value="9person">9 People</option>
                              <option value="10person">10 People</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                            <input type="text" name="Date" placeholder="Date" class="form-control datepicker">
                          </div>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <div class="fa fa-clock-o"></div>
                            </div>
                            <select type="text" name="Time" placeholder="Time" class="form-control">
                              
                              <option value="9:00 AM">9:00 AM</option>
                              <option value="10:00 AM">10:00 AM</option>
                              <option value="11:00 AM">11:00 AM</option>
                              <option value="12:00 AM">12:00 AM</option>
                              <option value="1:00 AM">1:00 PM</option>
                              <option value="2:00 AM">2:00 PM</option>
                              <option value="3:00 AM">3:00 PM</option>
                              <option value="4:00 AM">4:00 PM</option>
                              <option value="5:00 AM">5:00 PM</option>
                              <option value="6:00 AM">6:00 PM</option>
                              <option value="7:00 AM">7:00 PM</option>
                              <option value="8:00 AM">8:00 PM</option>
                              <option value="9:00 AM">9:00 PM</option>
                              <option value="10:00 AM">10:00 PM</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <textarea name="MESSAGE" class="form-control" required=""></textarea>
                        </div>
                        <div class="form-group">
                          <div class="swin-btn-wrap center"><button type="submit" class="swin-btn center form-submit"> <span>Book Table</span></button></div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="section-deco"><img src="assets/images/pages/reservation-showcase.png" alt="fooday" class="img-deco"></div>
                </div>
              </div>
            </section>
          
           
          </div>
        </div>

        @endsection