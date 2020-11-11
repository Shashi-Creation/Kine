<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FrontController extends Controller
{
        public function index()
    {

       $first = Post::orderBy('created_at', 'desc')->where("status",1)->first();
       $second = Post::orderBy('created_at', 'desc')->where("status",1)->skip(1)->take(1)->get();
       $third = Post::orderBy('created_at', 'desc')->where("status",1)->skip(2)->take(1)->get();
       $fourth = Post::orderBy('created_at', 'desc')->where("status",1)->skip(3)->take(1)->get();
       $fifth = Post::orderBy('created_at', 'desc')->where("status",1)->skip(4)->take(1)->get();
       $view= Post::postgetlist()->sortByDesc('created_at');
       //return $test = Post::all()->sortByDesc('created_at');
        $test2 = DB::table('posts')->join('users','users.id','posts.user_id')->select('posts.*','users.name','users.image as uimg')->get();
        $test3 = json_encode($test2);
        return $area = json_decode($test3, true);
        return view('frontend.postindex',compact('view','first','second','third','fourth','fifth'));
    }


    public function view($id)
    {
        
        $count = Post::find($id);
        $countall = DB::table('posts')->where('id', $id)->value('p_count');
        $add = $countall + 1;
        $count->p_count = $add;
        $count->save();

        $data = Post::selectpost($id);
        return view ('frontend.postview',compact('data'));
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