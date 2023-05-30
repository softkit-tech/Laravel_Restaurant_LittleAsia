
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
                                    <h4 class="page-title">Datatable</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">Moltran</a></li>
                                            <li class="breadcrumb-item"><a href="#">table</a></li>
                                            <li class="breadcrumb-item active">Datatable</li>
                                        </ol>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Menu  All</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-12">
                                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Menu Name</th>
                                                            <th>Category Name</th>
                                                            <th>Price </th>
                                                            
                                                            <th>Image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>

                                                    @foreach($all_manu as $row)	
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$row->menu_name}}</td>
                                                            <td>{{$row->category_name}}</td>
                                                            <td>{{$row->menu_price}}</td>
                                                           
                                                            
                                                            
                                                            <td>
                                                             	<img src="{{asset('public/backend/media/menu/'.$row->image)}}" height="50px" width="50px;">
                                                            	</td>
                                                           
                                                            <td>
                                                            	<a href="{{route('edit.menu',$row->id)}}" class="btn btn-primary">Edit</a>
                                                            	<a href="{{route('delete.menu',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
                                                            </td>
                                                            
                                                        </tr>
                                                        
                                                        @endforeach
                                                        
                                                       
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- End Row -->

                    
                        <!-- End Row -->

                      
                        <!-- End Row -->

                     
                        <!-- End Row -->

                      
                        <!-- End Row -->

                      
                        <!-- End Row -->

                    </div>
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->

                

                <!-- end Footer -->

            </div>
@endsection
