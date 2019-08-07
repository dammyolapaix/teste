<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Admin\Post;
use App\Http\Requests\ValidateStorePost;
use Illuminate\Support\Facades\Storage;
use Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class PostsController extends Controller
{
    // Show all posts
    // Essa funçao está no HomeController

   // Create
    public function getCreate()
    {   

        return view('admin.posts.create');
    }

    public function setStore(ValidateStorePost $request)
    {
        // finding the user
        $user = Auth::user();

        // instanciando o model Post
        $post = new Post();

        $post->title = $request->title;
        $post->slug = Str::slug($post->title, '-');
        $post->body  = $request->body;
        $post->category  = $request->category;
        $post->image  = $request->image;

        //Image Upload
        if ($request->file('image')) {
            
            $path = Storage::disk('public')->put('images', $request->file('image'));
            $post->fill( ['image'=> asset($path)] )->save();
        }

        // Saving the post
        $user->posts()->save($post);

        Session::flash('success',' O post foi salvo com sucesso!');
        return redirect()->route('admin.show', $post->id);    

   }
 
    // Show one single post by ID
    public function getShow($id)
    {

        $post = Post::find($id);

        // spitting the object to the view
        return view('admin.posts.show')->with('post',$post);
    }

    // Edit
    public function getEdit($id)
    {
        $post = Post::find($id);

        // spitting the object to the view
        return view('admin.posts.edit')->with('post',$post);
    }
  
    public function setUpdate(Request $request, $id)
    {

         $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required'
        ]);

        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->slug  = Str::slug($post->title, '-');
        $post->body  = $request->input('body');
        $post->category  = $request->input('category');
      
        //Image Upload
        if(isset($request->image)){
            $post->image  =  $request->input('image');
        }else{
            $post->image = $post->image;
        }

        if ($request->file('image')) {
            
            $path = Storage::disk('public')->put('images', $request->file('image'));
            $post->fill( ['image'=> asset($path)] )->save();
        }
       
        $post->save();

        Session::flash('success',' O post foi atualizado com sucesso!');
        return redirect()->route('admin.show', $post->id);
         
    }

    // Delete  
    public function setDestroy($id)
    {
        $post = Post::find($id);

        $post->delete();

         // Show message
         Session::flash('success',' O post foi deletado com sucesso!');

        // Redirect to view
         return redirect()->route('admin.index');
    }

} // end class
