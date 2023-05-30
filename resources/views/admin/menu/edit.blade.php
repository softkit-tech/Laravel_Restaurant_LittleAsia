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
                                        <h3 class="card-title">Menu Edit Section</h3></div>
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
                                        <form action="{{route('update.menu',$menu->id)}}" method="post" enctype="multipart/form-data">

                                        	@csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Menu Name </label>
                                                <input type="text" class="form-control" name="menu_name"  value="{{$menu->menu_name}}">
                                            </div>

@php
$category=DB::table('categories')->where('status',1)->get()
@endphp
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Category Name </label>
                                                <select class="form-control" name="category_id">
                                                	@foreach($category as $row)
                                                	<option value="{{$row->id}}" @if($menu->category_id==$row->id) selected @endif>{{$row->category_name}}</option>
                                                	@endforeach
                                                </select>
                                            </div>

                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Menu Price </label>
                                                <input type="text" class="form-control" name="menu_price"   value="{{$menu->menu_price}}">
                                            </div>

                                               <div class="form-group">
                                                <label for="exampleInputEmail1">Menu Discount </label>
                                                <input type="text" class="form-control" name="menu_discount"  value="{{$menu->menu_discount}}">
                                            </div>

                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Menu Details </label>
                                                <textarea class="form-control" name="details">
                                                	{{$menu->details}}
                                                </textarea>
                                            </div>

                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Menu Image </label>
                                                <input type="file" class="form-control" name="image">

                                                <img src="{{asset('public/backend/media/menu/'.$menu->image)}}" height="50px" width="50px;">
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