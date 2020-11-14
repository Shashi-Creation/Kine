<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class AuthorPostController extends Controller
{
    public function home()
    {
       
        return view('backend.author.post.create-post');
    }

    

public function store(Request $request)
    {
        $this->validate(request(), [

        'title'       => 'required',
        'image'       => 'required', 
        'title'       => 'required',
        'status'      => 'required',
        
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
         return redirect('author/post');
    }






    public function viewpost()
    {
        $view = Post::all();
        return view('backend.author.post.all-posts',compact('view'));
    }

    


     public function view($id)
    {
       $data = Post::find($id);
        return view ('backend.author.post.view-post',compact('data'));
        
    }

    

     public function edit($id)
    {
       $data = Post::find($id);
        return view ('backend.author.post.update-post',compact('data'));
        
    }
 
   



public function update(Request $request,$id)
    {

        $this->validate(request(), [

        'title'       => 'required',
        
        'title'    => 'required',
        'status'     => 'required',
        
        ]);
        
        $data = Post::find($id);
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
                   
               }

        $data->save();
         return redirect('author/post');
    }

}




