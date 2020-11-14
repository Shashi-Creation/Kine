<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model
{
    public static function selectcomments($id) {
        $sql= DB::table('comments')
        ->select('comments.*', 'users.name' , 'users.image as userimage')
        ->leftjoin('users','comments.user_id', '=', 'users.id')
        ->where('comments.post_id', '=', $id)
        ->get();
        return $sql;     
    }
}
