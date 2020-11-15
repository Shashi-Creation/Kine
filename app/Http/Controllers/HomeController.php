<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;
use App\VisitorCount;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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


       $first = Post::orderBy('created_at', 'desc')->where("status",1)->first();
       $second = Post::orderBy('created_at', 'desc')->where("status",1)->skip(1)->take(1)->get();
       $third = Post::orderBy('created_at', 'desc')->where("status",1)->skip(2)->take(1)->get();
       $fourth = Post::orderBy('created_at', 'desc')->where("status",1)->skip(3)->take(1)->get();
       $first_t = Post::orderBy('p_count', 'desc')->where("status",1)->first();
       $second_t = Post::orderBy('p_count', 'desc')->where("status",1)->skip(1)->take(1)->get();
       $third_t = Post::orderBy('p_count', 'desc')->where("status",1)->skip(2)->take(1)->get()->first();
       $fourth_t = Post::orderBy('p_count', 'desc')->where("status",1)->skip(3)->take(1)->get()->first();
       $fifth_t = Post::orderBy('p_count', 'desc')->where("status",1)->skip(4)->take(1)->get()->first();
       $view = DB::table('posts')->join('users','users.id','posts.user_id')->select('posts.*','users.name','users.image as uimg')->where('posts.status',1)->orderBy('posts.created_at', 'DESC')->paginate(6);
        $v = new VisitorCount();
        $r = geoip()->getLocation($_SERVER["REMOTE_ADDR"]);
        
        $v->ip_address = $r->ip;
        $v->country    = $r->country;
        //$country = country('us');
        $v->save();
        //return $country->getFlag();

        


    if(Auth::user()->user_type_id =='1' && Auth::user()->status == '1'){
        return view('backend.admin.dashbord',compact('usercount','postcount','userinactivecount','visittoday'));
    }elseif( Auth::user()->user_type_id =='2' && Auth::user()->status == '1') {
        return view('backend.author.dashbord',compact('usercount','postcount','userinactivecount','visittoday'));
    }elseif( Auth::user()->user_type_id =='3' && Auth::user()->status == '1')  {
        return view('frontend.registeruser.postindex',compact('view','first','second','third','fourth','first_t','second_t','third_t','fourth_t','fifth_t'));
    }else{
        return view('auth.login');  
        }
    }
}
