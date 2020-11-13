<?php

namespace App\Http\Controllers;
use App\Post;
use App\User;
use App\VisitorCount;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class FrontController extends Controller
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
        $v->ip_address = \request()->ip();
        $v->save();


        return view('frontend.postindex',compact('view','first','second','third','fourth','first_t','second_t','third_t','fourth_t','fifth_t'));
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
        return view ('frontend.postview',compact('data','first_t','second_t','third_t','fourth_t','fifth_t','first','second','third','fourth'));
    }





public function regview()
    {
      return view('frontend.signupform');
    }

public function regstore(Request $request)
    {


        $this->validate(request(), [

        'name'       => 'required',
        'email'      => 'required|email|unique:users', 
        'country'    => 'required',
        'password'   => 'required|min:6',
        'password_confirmation'=>'required|same:password',
        ]);
      
      $data = new User();
      $data->name =$request->name;
      $data->country = $request->country;
      $data->email =$request->email;
      $data->password =Hash::make($request->password);
      $data->user_type_id =3;
      $data->status = 1;

        if($request->hasfile('image')){

                $file =$request->file('image');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('upload/user/',$filename);
                $data->image=$filename;

               
               }else{
                   echo 'Amila pakaya';
                   $data->image = 'noimage.jpg';
               }

      $data->save();
         return redirect('/');
    }

}