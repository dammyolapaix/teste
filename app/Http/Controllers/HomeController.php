<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Post;
use App\Models\User\Role;
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
    // Show all posts in dashboard (of the logged user)
    public function index()
    {   
        $user = Auth::user();

        foreach ($user->roles as $role) {
            
           if ($role->name == 'Admin') {
               
                $posts = Post::with('author')->orderBy('id','desc')->paginate(6);
                $role = 'Admin';
           }
           else {

                $posts = Post::where('user_id', Auth::user()->id)->paginate(6);
                $role = 'Autor';
           }

             return view('admin.posts.index')->with('posts',$posts)->with('role',$role);
        }
    }

    // GET
    // Show the login page
    public function login()
    {   
        return view('auth.login');
    }
    

} // end class
