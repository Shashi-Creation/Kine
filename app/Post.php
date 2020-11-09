<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Post extends Model
{
    public static function postgetlist() {
        $sql= DB::table('posts')
        ->select('posts.*', 'users.name' , 'users.image as userimage')
        ->leftjoin('users','posts.user_id', '=', 'users.id')
        ->where('posts.status', '=', 1)
        ->get();
        return $sql;     
    }

    public static function selectpost($id) {
        $sql= DB::table('posts')
        ->select('posts.*', 'users.name' , 'users.image as userimage')
        ->leftjoin('users','posts.user_id', '=', 'users.id')
        ->where('posts.id', '=', $id)
        ->get();
        return $sql;     
    }
}
