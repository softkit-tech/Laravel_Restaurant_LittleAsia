<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/moltran/layouts/blue-vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 May 2020 17:49:47 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Dashboard Restaurant</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('public/backend/assets/images/favicon.ico')}}">

        <!-- Plugins css-->
        <link href="{{asset('public/backend/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />


        <!-- App css -->
        <link href="{{asset('public/backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('public/backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />



        <!-- Table datatable css -->
                <link href="{{asset('public/backend/assets/libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('public/backend/assets/libs/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
               
                <link href="{{asset('public/backend/assets/libs/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('public/backend/assets/libs/datatables/scroller.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />


         <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">


                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('public/backend/assets/images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                         

                          
                         

                            <!-- item-->
                            <a href="{{route('change.password')}}" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock"></i>
                                <span>Change  Password</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="{{url('logout')}}" class="dropdown-item notify-item">
                                <i class="mdi mdi-power-settings"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>

                 


                </ul>

             
               
            </div>
            <!-- end Topbar -->
            
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                    <div class="slimscroll-menu">
    
                        <!--- Sidemenu -->
                        <div id="sidebar-menu">
    
                            <div class="user-box">
                    
                                <div class="float-left">
                                    <img src="{{asset('public/backend/assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-md rounded-circle">
                                </div>
                                <div class="user-info">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Resturent  <i class="mdi mdi-chevron-down"></i>
                                                        </a>
                                        <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 29px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <li><a href="{{route('change.password')}}" class="dropdown-item"><i class="mdi mdi-lock mr-2"></i> Change  Password</a></li>
                                            <li><a href="{{url('logout')}}" class="dropdown-item"><i class="mdi mdi-power-settings mr-2"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
    
                            <ul class="metismenu" id="side-menu">
    
                                <li>
                                    <a href="{{url('/home')}}" class="waves-effect">
                                        <i class="mdi mdi-home"></i>
                                        <span> Dashboard </span>
                                    </a>
                                </li>

                                 <li>
                                    <a href="{{route('all.reservision')}}" class="waves-effect">
                                       <i class="mdi mdi-email"></i>
                                        <span> All Reservision  </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('all.contact')}}" class="waves-effect">
                                       <i class="mdi mdi-email"></i>
                                        <span> All Contact  </span>
                                    </a>
                                </li>

    
                                <li>
                                    <a href="javascript: void(0);" class="waves-effect">
                                        <i class="mdi mdi-email"></i>
                                        <span> Category </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{url('add/category')}}">Add Category</a></li>
                                        <li><a href="{{route('all.category')}}">All Category</a></li>
                                        
                                    </ul>
                                </li>
    
                              
    
                                <li>
                                    <a href="#" class="waves-effect">
                                        <i class="mdi mdi-palette"></i>
                                        <span> Menu </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{route('add.menu')}}">Add Menu</a></li>
                                        <li><a href="{{route('all.menu')}}">All Menu</a></li>
                                        
                                    </ul>
                                </li>
    
                              
    
                                <li>
                                    <a href="" class="waves-effect">
                                        <i class="mdi mdi-atom-variant"></i>
                                        <span> Team </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{route('add.team')}}">Add Team</a></li>
                                        <li><a href="{{route('all.team')}}">All Team</a></li>
                                        
                                    </ul>
                                </li>



                                <li>
                                    <a href="#" class="waves-effect">
                                        <i class="mdi mdi-widgets"></i>
                                        <span> Blog </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{route('add.postcategory')}}">Post Category</a></li>
                                        <li><a href="{{route('add.post')}}">Add Post</a></li>
                                       
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="#" class="waves-effect">
                                        <i class="mdi mdi-widgets"></i>
                                        <span> Social </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        <li><a href="{{route('add.social')}}">Add Social</a></li>
                                        <li><a href="{{route('all.social')}}">All Social</a></li>
                                       
                                    </ul>
                                </li>



                                  <li>
                                    <a href="{{route('all.sub')}}" class="waves-effect">
                                       <i class="mdi mdi-email"></i>
                                        <span> Site Setting </span>
                                    </a>
                                </li>

                                  <li>
                                    <a href="{{route('all.sub')}}" class="waves-effect">
                                       <i class="mdi mdi-email"></i>
                                        <span> All Sub  </span>
                                    </a>
                                </li>
    
                               
    
                            </ul>
    
                        </div>
                        <!-- End Sidebar -->
    
                        <div class="clearfix"></div>
    
                    </div>
                    <!-- Sidebar -left -->
    
                </div>
                <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

           @yield('content')

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        
        <!-- Right Sidebar -->
     
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
       

        <!-- Vendor js -->
        <script src="{{asset('public/backend/assets/js/vendor.min.js')}}"></script>

        <script src="{{asset('public/backend/assets/libs/moment/moment.min.js')}}"></script>
        <script src="{{asset('public/backend/assets/libs/jquery-scrollto/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('public/backend/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
        
        <!-- Chat app -->
        <script src="{{asset('public/backend/assets/js/pages/jquery.chat.js')}}"></script>

        <!-- Todo app -->
        <script src="{{asset('public/backend/assets/js/pages/jquery.todo.js')}}"></script>

        <!-- flot chart -->
        <script src="{{asset('public/backend/assets/libs/flot-charts/jquery.flot.js')}}"></script>
        <script src="{{asset('public/backend/assets/libs/flot-charts/jquery.flot.time.js')}}"></script>
        <script src="{{asset('public/backend/assets/libs/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('public/backend/assets/libs/flot-charts/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('public/backend/assets/libs/flot-charts/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('public/backend/assets/libs/flot-charts/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('public/backend/assets/libs/flot-charts/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('public/backend/assets/libs/flot-charts/jquery.flot.crosshair.js')}}"></script>
    


           <script src="{{asset('public/backend/assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
           <script src="{{asset('public/backend/assets/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>

           <script src="{{asset('public/backend/assets/libs/datatables/dataTables.responsive.min.js')}}"></script>
           <script src="{{asset('public/backend/assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>

           <script src="{{asset('public/backend/assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
           <script src="{{asset('public/backend/assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>

           <script src="{{asset('public/backend/assets/js/pages/datatables.init.js')}}"></script>

        <!-- Dashboard init JS -->
        <script src="{{asset('public/backend/assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('public/backend/assets/js/app.min.js')}}"></script>

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
     
     <script>  
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
             var link = $(this).attr("href");
                swal({
                  title: "Are you Want to delete?",
                  text: "Once Delete, This will be Permanently Delete!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                       window.location.href = link;
                  } else {
                    swal("Safe Data!");
                  }
                });
            });
    </script>

    </body>
</html>