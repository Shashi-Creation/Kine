<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\VisitorCount;
use App\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use \Rinvex\Country\CountryLoader;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function index()
    {

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

        return view('frontend.registeruser.postindex',compact('view','first','second','third','fourth','first_t','second_t','third_t','fourth_t','fifth_t'));
    }


    public function view($id)
    {
        
        $count = Post::find($id);
        $countall = DB::table('posts')->where('id', $id)->value('p_count');
        $add = $countall + 1;
        $count->p_count = $add;
        $count->save();

        $data = Post::selectpost($id);
        $first_t = Post::orderBy('p_count', 'desc')->where("status",1)->first();
        $second_t = Post::orderBy('p_count', 'desc')->where("status",1)->skip(1)->take(1)->get();
        $third_t = Post::orderBy('p_count', 'desc')->where("status",1)->skip(2)->take(1)->get()->first();
        $fourth_t = Post::orderBy('p_count', 'desc')->where("status",1)->skip(3)->take(1)->get()->first();
        $fifth_t = Post::orderBy('p_count', 'desc')->where("status",1)->skip(4)->take(1)->get()->first();
        $first = Post::orderBy('created_at', 'desc')->where("status",1)->first();
        $second = Post::orderBy('created_at', 'desc')->where("status",1)->skip(1)->take(1)->get();
        $third = Post::orderBy('created_at', 'desc')->where("status",1)->skip(2)->take(1)->get();
        $fourth = Post::orderBy('created_at', 'desc')->where("status",1)->skip(3)->take(1)->get();
        $comments = Comment::selectcomments($id);
        $commentcount = Comment::all()->where("post_id",$id)->count();
        return view ('frontend.registeruser.postview',compact('data','first_t','second_t','third_t','fourth_t','fifth_t','first','second','third','fourth','commentcount','comments'));
    }

    
    public function commentadd(Request $request ,$id)
    {
    	$this->validate(request(), [

        'comment'       => 'required',
        ]);

        $data = new Comment();
        $data->user_id  = Auth::id();
        $data->post_id  = $id;
    	$data->comment  = $request->comment;
    	$data->status   = 0;
    	$data->save();
        return redirect()->back();
    }

}
