<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

    // Many to Many
    public function posts() {

        return $this->belongsToMany('App\Models\Admin\Post');
    }

} // end class
