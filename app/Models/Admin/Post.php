<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\User;

class Post extends Model
{

    protected $fillable = [
        'title', 'slug', 'body', 'category', 'image','user_id'
    ];


     public function author() {

        return belongsTo('App\User', 'user_id' , 'id');
    }


} // end class


