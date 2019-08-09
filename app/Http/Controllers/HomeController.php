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
    // Show all author's posts in dashboard
    public function index()
    {   
        $user = Auth::user();

        $posts = Post::orderBy('id','desc')->paginate(5);
        return view('admin.posts.index')->with('posts',$posts)->with('user',$user);
    }

    // GET
    // Show de login page
    public function login()
    {   
        return view('auth.login');
    }

} // end class
