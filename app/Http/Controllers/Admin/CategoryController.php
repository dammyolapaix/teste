<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;

class CategoryController extends Controller
{
    // GET
    // Read all categories
     public function index()
    {   

    	$categories = Category::all();

        return view('admin.categories.index')->with('categories',$categories);

    }


} // end class

