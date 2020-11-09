<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function home()
    {
       
        return view('backend.admin.post.create-post');
    }

public function store(Request $request)
    {
        $this->validate(request(), [

        'title'       => 'required',
        'image'      => 'required', 
        'title'    => 'required',
        'status'     => 'required',
        
        ]);
    	
    	$data = new Post();
    	$data->title =$request->title;
    	$data->url =$request->url;
    	$data->post_t =$request->content;
    	$data->user_id =1;
    	$data->status =$request->status;

    		if($request->hasfile('image')){

                $file =$request->file('image');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('upload/post/',$filename);
                $data->image=$filename;

               
               }else{
                   echo 'Amila pakaya';
                   $data->image = 'noimage.jpg';
               }

    	$data->save();
         return redirect('admin/post');
    }

    public function viewpost()
    {
        $view = Post::all();
        return view('backend.admin.post.all-posts',compact('view'));
    }

     public function view()
    {
       
        return view('backend.admin.post.create-post');
    }


}
