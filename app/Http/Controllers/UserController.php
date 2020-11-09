<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $view= User::all();
        return view('backend.admin.user.index',compact('view'));
    }

    public function create()
    {
    	return view('backend.admin.user.user-create');
    }

public function store(Request $request)
    {
        $this->validate(request(), [

        'name'       => 'required',
        'email'      => 'required|email|unique:users', 
        'country'    => 'required',
        'status'     => 'required',
        'password'   => 'required|min:6',
        'password_confirmation'=>'required|same:password',
        ]);
    	
    	$data = new User();
    	$data->name =$request->name;
    	$data->country = $request->country;
    	$data->email =$request->email;
    	$data->password =Hash::make($request->password);
    	$data->user_type_id =2;
    	$data->status =$request->status;

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
         return redirect('admin/user');
    }



    public function userview($id)
    {

       $data = User::find($id);
        return view ('backend.admin.user.user-view',compact('data'));
        // return view('backend.admin.user.user-view');
    }



}






