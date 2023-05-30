<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Image;
class TeamController extends Controller
{
    
 // public function __construct()
 //    {
 //        $this->middleware('auth');
 //    }
    
    public function create()
    {
    	return view('admin.team.create');
    }


    public function store(Request $request)
    {
    	

    	$team=new Team();
    	$team->team_name=$request->team_name;
    	$team->designation=$request->designation;
       if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/team/' .$img);
        Image::make($image)->save($location);
        $team->image = $img;
       }

          $team->save();
        if($team){
          $notification=array(
            'messege'=>'team  Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
       }else{
             $notification=array(
            'messege'=>'team  Added Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
       }
    }


    public function all_team ()
    {
    	$all_team=Team::all();
    	return view('admin.team.index',compact('all_team'));
    }

    public function delete($id)
    {
    	$delete=Team::find($id);

    	$delete->delete();
    	    $notification=array(
            'messege'=>'team  Delete Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
    }


    public function edit($id)
    {
    	$team=Team::find($id);
    	return view('admin.team.edit',compact('team'));
    }


    public function update(Request $request,$id)
    {
         $team=Team::find($id);
    	$team->team_name=$request->team_name;
    	$team->designation=$request->designation;
    	
       if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/team/' .$img);
        Image::make($image)->save($location);
        $team->image = $img;
       }

          $team->save();
           $notification=array(
            'messege'=>'Team  Updated Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->route('all.team')->with($notification);	
    }
}
