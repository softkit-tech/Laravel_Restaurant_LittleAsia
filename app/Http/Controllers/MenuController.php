<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use DB;
use Image;
class MenuController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
    	return view('admin.menu.create');
    }


    public function store(Request $request)
    {


    	$menu=new Menu();


    	$menu->menu_name=$request->menu_name;
    	$menu->category_id=$request->category_id;
    	$menu->menu_price=$request->menu_price;
    	$menu->menu_discount=$request->menu_discount;
    	$menu->details=$request->details;
       if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/menu/' .$img);
        Image::make($image)->save($location);
        $menu->image = $img;
       }

          $menu->save();
        if($menu){
          $notification=array(
            'messege'=>'Manu  Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
       }else{
             $notification=array(
            'messege'=>'Manu  Added Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
       }

    }

    public function all_manu ()
    {

    	$all_manu=DB::table('menus')
      ->join('categories','menus.category_id','categories.id')
      ->select('menus.*','categories.category_name')
      ->get();
    	return view('admin.menu.index',compact('all_manu'));
    }



    public function delete($id)
    {
      $delete=Menu::find($id);

      $delete->delete();

       $notification=array(
            'messege'=>'Manu  Delete Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
    }


    public function edit($id)
    {

      $menu=Menu::find($id);
      return view('admin.menu.edit',compact('menu'));
    }


    public function update(Request $request,$id)
    {
      $menu=Menu::find($id);


      $menu->menu_name=$request->menu_name;
      $menu->category_id=$request->category_id;
      $menu->menu_price=$request->menu_price;
      $menu->menu_discount=$request->menu_discount;
      $menu->details=$request->details;

       if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/menu/' .$img);
        Image::make($image)->save($location);
        $menu->image = $img;
       }

          $menu->save();
        if($menu){
          $notification=array(
            'messege'=>'Manu  Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('all.menu')->with($notification);
       }else{
             $notification=array(
            'messege'=>'Manu  Eroor Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
       }
    }



}
