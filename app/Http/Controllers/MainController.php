<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\Reservation;
use App\Models\Contact;
use App\Models\Newlater;
class MainController extends Controller
{
  
    public function index()
    {
        $menus=DB::table('menus')->get();
        $teams=DB::table('teams')->get();
    	$category=DB::table('categories')->where('status',1)->get();
    	return view('pages.index',compact('menus','teams','category'));
    }


    public function CategoryWish($id)
    {
    	$all_menu=DB::table('menus')->where('category_id',$id)
         ->get();
    	return view('pages.menu_list',compact('all_menu'));
    }

    

    public function ContactUS()
    {
        return view('pages.contact');
    }


    public function ContactStore(Request $request)
    {
    	$contact=new Contact();

    	$contact->name=$request->name;
    	$contact->email=$request->email;
        $contact->comments=$request->comments;
    	$contact->phone=$request->phone;

    	$contact->save();
    	 if ($contact) {           
          $notification=array(
            'messege'=>'Contact   Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
       }
    }


    public function newslater(Request $request)
    {
         $validatedData = $request->validate([
        'email' => 'required|unique:newlaters|max:255',
        
            ]);



       $latter=new Newlater();
       $latter->email=$request->email;
       $latter->save();
        if ($latter) {           
          $notification=array(
            'messege'=>'Subcribe   Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
       }
    }


    public function reservation()
    {
        return view('pages.reservation');
    }


    public function ReservationStore(Request $request)
    {
       $validatedData = $request->validate([
        'Username' => 'required',
        'Phone' => 'required',
        'Email' => 'required',
        'People' => 'required',
        'Date' => 'required',
        'Time' => 'required',
        'MESSAGE' => 'required',
        
        
            ]);





        $reservision=new Reservation();

        $reservision->Username=$request->Username;
        $reservision->Phone=$request->Phone;
        $reservision->Email=$request->Email;
        $reservision->People=$request->People;
        $reservision->Date=$request->Date;
        $reservision->Time=$request->Time;
        $reservision->MESSAGE=$request->MESSAGE;
        $reservision->Type=$request->Type;
        $reservision->tranction_id=$request->tranction_id;
        $reservision->bkash_number=$request->bkash_number;

        $reservision->save();
         if ($reservision) {           
          $notification=array(
            'messege'=>'Reservision   Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
       }
    }


    public function about()
    {
      $all_about=DB::table('teams')->get();
       return view('pages.about',compact('all_about'));
    }


    public function BlogList()
    {
        $blog_list=DB::table('posts')->paginate(4);
        return view('pages.blog',compact('blog_list'));
    }


    public function BlogWish($id)
    {

        $blog_wish=DB::table('posts')->where('postcate_id',$id)->paginate(4);
        return view('pages.blogwish',compact('blog_wish'));
    }


    public function BlogSingle($id)
    {
        $single_blog=DB::table('posts')->where('posts.id',$id)->first();
       return view('pages.single_blog',compact('single_blog'));
    }




}
