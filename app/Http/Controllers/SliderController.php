<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Slider;
use Image;
class SliderController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }


      public function create()
    {
    	return view('admin.slider.create');
    }


    public function store(Request $request)
    {
    	$slider=new Slider();


    	$slider->slider_name=$request->slider_name;
    	
    	$slider->description=$request->description;
       if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/slider/' .$img);
        Image::make($image)->save($location);
        $slider->image = $img;
       }

          $slider->save();
        if($slider){
          $notification=array(
            'messege'=>'slider  Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
       }else{
             $notification=array(
            'messege'=>'slider  Added Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
       }
    }


    public function all_slider()
    {

    	$all_slider=Slider::all();
    	return view('admin.slider.index',compact('all_slider'));
    }


    public function delete($id)
    {
    	$delete=Slider::find($id);

    	$delete->delete();
    	if($delete){
          $notification=array(
            'messege'=>'slider  Deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
      }else{
          $notification=array(
            'messege'=>'slider  Deleted Successfully',
            'alert-type'=>'error'
             );
    }

}


public function edit($id)
{
	$slider=Slider::find($id);
	return view('admin.slider.edit',compact('slider'));
}


   public function update(Request $request,$id)
   {
   	$slider=Slider::find($id);

   	$slider->slider_name=$request->slider_name;
    	$slider->description=$request->description;
       if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/slider/' .$img);
        Image::make($image)->save($location);
        $slider->image = $img;

     }


          $slider->save();
          if($slider){
          $notification=array(
            'messege'=>'slider  Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('all.slider')->with($notification);
      }else{
          $notification=array(
            'messege'=>'slider  Deleted Successfully',
            'alert-type'=>'error'
             );
    }




   }

}
