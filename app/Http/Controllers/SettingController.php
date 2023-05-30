<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Image;
class SettingController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
    	return view('admin.setting.create');
    }


    public function store(Request $request)
    {


    	$setting=new Setting();


    	$setting->phone_one=$request->phone_one;
    	$setting->phone_two=$request->phone_two;
    	$setting->email=$request->email;

       if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/setting/' .$img);
        Image::make($image)->save($location);
        $setting->image = $img;
       }

          $setting->save();
        if($setting){
          $notification=array(
            'messege'=>'Setting  Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
       }else{
             $notification=array(
            'messege'=>'Setting  Added Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
       }

    }

    public function all_setting ()
    {

    	$all_setting=Setting::all();
    	return view('admin.setting.index',compact('all_setting'));
    }



    public function delete($id)
    {
      $delete=Setting::find($id);

      $delete->delete();

       $notification=array(
            'messege'=>'Manu  Delete Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
    }


    public function edit($id)
    {

      $setting=Setting::find($id);
      return view('admin.setting.edit',compact('setting'));
    }


    public function update(Request $request,$id)
    {
      $setting=Setting::find($id);


     $setting->phone_one=$request->phone_one;
     $setting->phone_two=$request->phone_two;
     $setting->email=$request->email;

       if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/setting/' .$img);
        Image::make($image)->save($location);
        $setting->image = $img;
       }

          $setting->save();
        if($setting){
          $notification=array(
            'messege'=>'Setting  Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('all.setting')->with($notification);
       }else{
             $notification=array(
            'messege'=>'Setting  Eroor Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
       }
    }



}
