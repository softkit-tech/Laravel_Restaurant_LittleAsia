<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Post;
use Image;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
    	return view('admin.post.create');
    }


    public function store(Request $request)
    {


    	$post=new Post();


    	$post->post_name=$request->post_name;
    	$post->postcate_id=$request->postcate_id;
    	$post->post_date=$request->post_date;
    	$post->post_detail=$request->post_detail;



       if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/post/' .$img);
        Image::make($image)->save($location);
        $post->image = $img;
       }

          $post->save();
        if($post){
          $notification=array(
            'messege'=>'Post  Added Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
       }else{
             $notification=array(
            'messege'=>'Post  Added Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
       }

    }

    public function all_post()
    {

    	$all_post=DB::table('posts')
         ->join('post_cates','posts.postcate_id','post_cates.id')
         ->select('posts.*','post_cates.name')

    	->get();
    	return view('admin.post.index',compact('all_post'));
    }



    public function delete($id)
    {
      $delete=Post::find($id);

      $delete->delete();

       $notification=array(
            'messege'=>'Post  Delete Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
    }


    public function edit($id)
    {

      $post=Post::find($id);
      return view('admin.post.edit',compact('post'));
    }


    public function update(Request $request,$id)
    {
      $post=Post::find($id);


      $post->post_name=$request->post_name;
      $post->postcate_id=$request->postcate_id;
      $post->post_date=$request->post_date;
      $post->post_detail=$request->post_detail;

       if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('backend/media/post/' .$img);
        Image::make($image)->save($location);
        $post->image = $img;
       }

          $post->save();
        if($post){
          $notification=array(
            'messege'=>'Post  Updated Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->route('all.post')->with($notification);
       }else{
             $notification=array(
            'messege'=>'Post  Eroor Successfully',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
       }
    }



}
