<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
    	$userlist = User::all()->get();
        $usercount = $userlist->count();
        $postlist = Post::all()->get();
        $postcount = $postlist->count();

        return view('backend.admin.dashboard',compact('usercount','postcount'));
    }


}
