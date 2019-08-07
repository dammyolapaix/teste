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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex()
    {   
        $user = Auth::user();

        $posts = Post::orderBy('id','desc')->paginate(5);
        return view('admin.posts.index')->with('posts',$posts)->with('user',$user);
    }

    public function getLogin()
    {   
        return view('auth.login');
    }
}
