@extends('admin.admin_layout')

@section('content')
 <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">General elements</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">Moltran</a></li>
                                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                            <li class="breadcrumb-item active">General elements</li>
                                        </ol>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <!-- Basic example -->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Setting Section</h3></div>
                                        <a href="{{route('all.setting')}}" class="btn btn-primary">All Setting</a>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    <div class="card-body">
                                        <form action="{{route('update.setting',$setting->id)}}" method="post" enctype="multipart/form-data">

                                        	@csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Phone Number </label>
                                                <input type="text" class="form-control" name="phone_one" value="{{$setting->phone_one}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Phone Number Two </label>
                                                <input type="text" class="form-control" name="phone_two"  value="{{$setting->phone_two}}">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email </label>
                                                <input type="email" class="form-control" name="email"  value="{{$setting->email}}">
                                            </div>



                                            

                                             

                                            

                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Menu Image </label>
                                                <input type="file" class="form-control" name="image"  >

                                                <img src="{{asset('public/backend/media/setting/'.$setting->image)}}" height="50px" width="50px;">
                                            </div>
                                           
                                            
                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                                        </form>
                                    </div>
                                    <!-- card-body -->
                                </div>
                                <!-- card -->
                            </div>
                            <!-- col-->

                            <!-- Horizontal form -->
                           
                            <!-- col -->

                        </div>
                        <!-- End row -->

                        <!-- Inline Form -->
                      
                        <!-- End row -->

                      
                        <!-- End row -->

                     
                        <!-- End row -->

                    </div>
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->

                


            </div>
@endsection