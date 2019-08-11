<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Http\Requests\ValidateStoreCategory;
use Illuminate\Support\Str;
use Session;

class CategoryController extends Controller
{
    // GET
    // Read all categories
     public function index()
    {   

    	$categories = Category::all();

        return view('admin.categories.index')->with('categories',$categories);

    }

     // GET
    // Create a new category
     public function create()
    {   

    	 return view('admin.categories.create');

    }

     // SET
    // Create a new category
    public function store(ValidateStoreCategory $request)
    {
      
        // instanciando o model Category
        $category = new Category();

        $category->name = $request->name;
     
        // Saving the category
        $category->save();

        Session::flash('success',' A categoria foi salva com sucesso!');
        return redirect()->route('categoria.index');    

   }

    // GET
    // Edit
    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit')->with('category',$category);
    }

    // SET
    // Edit
    public function update(ValidateStoreCategory $request, $id)
    {

        //  $validatedData = $request->validate([
        //     'name' => 'required',
        // ]);

        $category = Category::find($id);

        $category->name = $request->input('name');
 

        $category->save();

        Session::flash('success',' A categoria foi atualizada com sucesso!');
        return redirect()->route('categoria.index');   
         
    }


} // end class

