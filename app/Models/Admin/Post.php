<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
	
    protected $table = 'posts';

    protected $fillable = [
        'title', 'slug', 'body', 'category', 'image'
    ];


} // end class


