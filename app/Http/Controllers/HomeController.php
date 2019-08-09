<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Post;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // GET
    // Show all posts in dashboard (of a logged user)
    public function index()
    {   
        $user = Auth::user();

        $posts = Post::orderBy('id','desc')->paginate(5);
        return view('admin.posts.index')->with('posts',$posts)->with('user',$user);
    }

    // GET
    // Show the login page
    public function login()
    {   
        return view('auth.login');
    }
    

} // end class
