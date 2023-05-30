<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\PostCate;
class PostCateController extends Controller
{
    public function __construct()
     {
         $this->middleware('auth');
     }
    
     public function create()
     {
     	return view('admin.postcate.create');
     }


     public function store(Request $request)
     {

      $validatedData = $request->validate([
         'name' => 'required|unique:post_cates|max:255',
        
     ]);

        $postcate= new PostCate();
        $postcate->name=$request->name;


        $postcate->save();
              
           $notification=array(
             'messege'=>'postcate  Added Successfully',
             'alert-type'=>'success'
              );
            return Redirect()->back()->with($notification);

     	// return response()->json($data);


     }


     public function all_postcategory()
     {
     	$all_postcate=PostCate::all();
      return view('admin.postcate.index',compact('all_postcate'));
     }

     public function delete($id)
     {
     	$delete=PostCate::find($id);

     	 $delete->delete();

     	         
           $notification=array(
             'messege'=>'postcate  Delete Successfully',
             'alert-type'=>'error'
              );
            return Redirect()->back()->with($notification);


     }


     public function edit($id)
     {
         $postcate=PostCate::find($id);
         return view('admin.postcate.edit',compact('postcate'));
     }


     public function update(Request $request,$id)
     {

        $postcate=PostCate::find($id);
        $postcate->name=$request->name;

          $postcate->save();
            $notification=array(
             'messege'=>'postcate  Updated Successfully',
             'alert-type'=>'success'
              );
            return Redirect()->route('all.postcategory')->with($notification);

     }
}
