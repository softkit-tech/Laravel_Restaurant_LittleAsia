<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Contact;
use App\Models\Newlater;
class SystemController extends Controller
{
    
    //    public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function all_reservision()
    {

    	$all_reservision=Reservation::all();
    	return view('admin.system.reservision',compact('all_reservision'));
    }

    public function delete_reservision($id)
    {
    	$delete=Reservation::find($id);
    	$delete->delete();
    	       $notification=array(
            'messege'=>'Reservation  Delete Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
    }

     public function all_contact()
    {

    	$all_contact=Contact::all();
    	return view('admin.system.contact',compact('all_contact'));
    }

    public function delete_contact($id)
    {
    	$delete=Contact::find($id);
    	$delete->delete();
    	       $notification=array(
            'messege'=>'Contact  Delete Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
    }

     public function sub()
    {

        $all_sub=Newlater::all();
        return view('admin.system.sub',compact('all_sub'));
    }

    public function delete_sub($id)
    {
        $delete=Newlater::find($id);
        $delete->delete();
               $notification=array(
            'messege'=>'Newlater  Delete Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
    }
}
