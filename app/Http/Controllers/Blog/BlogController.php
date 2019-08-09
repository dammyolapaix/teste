<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{

	// GET
    // Show all posts with pagination
     public function index() {

        // $posts = Post::orderBy('id','desc')->paginate(6);
        $posts = Post::with('author')->get();

        // dd($posts);

        foreach ($posts as $post) {
            
            return view('blog.index', compact('posts'));
        }

    }

    // GET
    // Show one single post
     public function single($slug) {

        $posts = Post::orderBy('id','desc')->paginate(3);
        $post = Post::where('slug', $slug)->first(); 


        return view('blog.single', compact('post', 'posts'));
    }


    // GET 
    // Retrieving posts by category

    public function search(Request $request) {

        $post = $request->id;

        if ($post == 1) {
            
            $posts = Post::orderBy('id','desc')->paginate(5);
            return view('blog.search')->with('posts',$posts);
        }
        elseif ($post == 2) {
            
            $posts = Post::where('category', 'Atualidades')->latest()->paginate(5);
            return view('blog.search', ['posts' => $posts]);
        }
        elseif ($post == 3) {
            
            $posts = Post::where('category', 'Direito Bancário')->latest()->paginate(5);
            return view('blog.search', ['posts' => $posts]);
        }
        elseif ($post == 4) {
            
            $posts = Post::where('category', 'Direito Civil')->latest()->paginate(5);
            return view('blog.search', ['posts' => $posts]);
        }
        elseif ($post == 5) {
            
            $posts = Post::where('category', 'Direito Criminal')->latest()->paginate(5);
            return view('blog.search', ['posts' => $posts]);
        }
        elseif ($post == 6) {
            
            $posts = Post::where('category', 'Direito Família')->latest()->paginate(5);
            return view('blog.search', ['posts' => $posts]);
        }
        elseif ($post == 7) {
            
            $posts = Post::where('category', 'Direito Imobiliário')->latest()->paginate(5);
            return view('blog.search', ['posts' => $posts]);
        }
        elseif ($post == 8) {
            
            $posts = Post::where('category', 'Direito Médico')->latest()->paginate(5);
            return view('blog.search', ['posts' => $posts]);
        }
        elseif ($post == 9) {
            
            $posts = Post::where('category', 'Direito Previdenciário')->latest()->paginate(5);
            return view('blog.search', ['posts' => $posts]);
        }
        elseif ($post == 10) {
            
            $posts = Post::where('category', 'Direito Trabalhista')->latest()->paginate(5);
            return view('blog.search', ['posts' => $posts]);
        }
        elseif ($post == 11) {
            
            $posts = Post::where('category', 'Direito Tributário')->latest()->paginate(5);
            return view('blog.search', ['posts' => $posts]);
        }
            
    } // end function search


} // end class
