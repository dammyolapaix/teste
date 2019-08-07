<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{

    protected $fillable = [
        'title', 'slug', 'body', 'category', 'image'
    ];


     public function user() {

        return $this->belongsTo('App\User');
    }



} // end class


