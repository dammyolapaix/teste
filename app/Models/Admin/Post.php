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

     // One to Many(belongs to one author)
     public function author() {

        return $this->belongsTo('App\User', 'user_id' , 'id');
    }

    // Many to Many
     public function categories() {

        return $this->belongsToMany('App\Models\Admin\Category');
    }


} // end class


