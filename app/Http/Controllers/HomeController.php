<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use App\VisitorCount;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $usercount  = User::count();  
        $userinnactive  = User::all()->where("status",2);
        $userinactivecount = $userinnactive->count();
        $postcount  = Post::count();  
        $visittoday = VisitorCount::whereDate('created_at', date('Y-m-d'))->get()->count();


        return view('backend.admin.dashbord',compact('usercount','postcount','userinactivecount','visittoday'));
    }
}
