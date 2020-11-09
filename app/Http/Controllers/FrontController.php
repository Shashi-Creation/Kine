<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class FrontController extends Controller
{
        public function index()
    {
       $first = Post::orderBy('created_at', 'desc')->first();
       $second = Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get();
       $third = Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get();
       $fourth = Post::orderBy('created_at', 'desc')->skip(3)->take(1)->get();
       $fifth = Post::orderBy('created_at', 'desc')->skip(4)->take(1)->get();
       $view= Post::paginate(6);
        return view('frontend.postindex',compact('view','first','second','third','fourth','fifth'));
    }


    public function view($id)
    {
        $data = Post::find($id);
        return view ('frontend.postview',compact('data'));
    }

}