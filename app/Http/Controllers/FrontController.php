<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class FrontController extends Controller
{
        public function index()
    {
       $view= Post::paginate(6);
        return view('frontend.postindex',compact('view'));
    }


    public function view($id)
    {
        $data = Post::find($id);
        return view ('frontend.postview',compact('data'));
    }

}