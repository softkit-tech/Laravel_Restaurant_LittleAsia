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
                                        <h3 class="card-title">Post Section</h3></div>
                                        <a href="{{route('all.post')}}" class="btn btn-primary">All Post</a>
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
                                        <form action="{{route('update.post',$post->id)}}" method="post" enctype="multipart/form-data">

                                        	@csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Post  Name </label>
                                                <input type="text" class="form-control" name="post_name" value="{{$post->post_name}}">
                                            </div>

@php
$post_cate=DB::table('post_cates')->get()
@endphp
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Post Category Name </label>
                                                <select class="form-control" name="postcate_id">
                                                	@foreach($post_cate as $row)
                                                	<option value="{{$row->id}}" @if($post->postcate_id==$row->id) selected @endif>{{$row->name}}</option>
                                                	@endforeach
                                                </select>
                                            </div>

                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Post Date </label>
                                                <input type="date" class="form-control" name="post_date"  value="{{$post->post_date}}">
                                            </div>

                                              

                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Menu Details </label>
                                                <textarea class="form-control" name="post_detail">
                                                	{{$post->post_detail}}
                                                </textarea>
                                            </div>

                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Post Image </label>
                                                <input type="file" class="form-control" name="image">

                                                <img src="{{asset('public/backend/media/post/'.$post->image)}}" height="50px" width="50px;">
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