<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;
class SocialController extends Controller
{
    //  public function __construct()
    // {
    //     $this->middleware('auth');
    // }

     public function create()
    {
    	return view('admin.social.create');
    }


    public function store(Request $request)
    {

       $social= new Social();
       $social->icon=$request->icon;
       $social->link=$request->link;

       $social->save();
             
          $notification=array(
            'messege'=>'social  Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);

    	// return response()->json($data);


    }


    public function all_social()
    {
    	$all_social=Social::all();
     return view('admin.social.index',compact('all_social'));
    }

    public function delete($id)
    {
    	$delete=Social::find($id);

    	 $delete->delete();

    	         
          $notification=array(
            'messege'=>'Social  Delete Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);


    }


    public function edit($id)
    {
        $social=Social::find($id);
        return view('admin.social.edit',compact('social'));
    }


    public function update(Request $request,$id)
    {

       $social=Social::find($id);
       $social->icon=$request->icon;
       $social->link=$request->link;

         $social->save();
           $notification=array(
            'messege'=>'social  Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('all.social')->with($notification);

    }
}
