<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
class CategoryController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function create()
    {
    	return view('admin.category.create');
    }


    public function store(Request $request)
    {

     $validatedData = $request->validate([
        'category_name' => 'required|unique:categories|max:255',
       
    ]);


    	// $data=array();
    	// $data['category_name']=$request->category_name;
    	// $data['status']=$request->status;
    	// DB::table('categories')->insert($data);
       $category= new Category();
       $category->category_name=$request->category_name;
       $category->status=$request->status;

       $category->save();
             
          $notification=array(
            'messege'=>'category  Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);

    	// return response()->json($data);


    }


    public function all_category()
    {
    	$all_category=Category::all();
     return view('admin.category.index',compact('all_category'));
    }

    public function delete($id)
    {
    	$delete=Category::find($id);

    	 $delete->delete();

    	         
          $notification=array(
            'messege'=>'category  Delete Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);


    }


    public function edit($id)
    {
        $category=Category::find($id);
        return view('admin.category.edit',compact('category'));
    }


    public function update(Request $request,$id)
    {

       $category=Category::find($id);
       $category->category_name=$request->category_name;
       $category->status=$request->status;

         $category->save();
           $notification=array(
            'messege'=>'category  Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('all.category')->with($notification);

    }
}
