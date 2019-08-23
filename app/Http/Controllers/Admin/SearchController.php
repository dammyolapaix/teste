<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use Session;
use Illuminate\Support\Str;


class SearchController extends Controller
{

	// GET
    // Retrieving posts by category
	public function search(Request $request) {

		$post = $request->id;

		if ($post == 1) {
			
			$posts = Post::orderBy('id','desc')->paginate(5);
			return view('admin.posts.search')->with('posts',$posts);
		}
		
			
	} // end function search

	// GET
	// search by keywords
	public function search02(Request $request) {

		$post = new Post;

		$word= $request->search;

		$posts = Post::where('title', 'LIKE', "%{$word}%")->latest()->paginate(5);

		return view('admin.posts.search')->with('posts' , $posts);

	} // end function search02

    
} // end class
