<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Storage;
use Session;
use Illuminate\Support\Str;


class AccountController extends Controller
{
    // GET
    // show user dashboard
	public function index($id) {

		$user = User::find($id);

		return view('admin.account.index')->with('user',$user);

	}

    // GET
	// Show user account info
    public function show($id)
    {

        $user = User::find($id);

        return view('admin.account.show')->with('user',$user);
    }

    // GET
	// Edit
    public function edit($id)
    {
        $user = User::find($id);

        // spitting the object to the view
        return view('admin.account.edit')->with('user',$user);
    }

    // SET
    // update
    public function update(Request $request, $id) {

    	$validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
         
        ]);

        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->image  =  $request->image;

        //Image Upload

        if ($request->file('image')) {
            
            $path = Storage::disk('public')->put('images', $request->file('image'));
            $user->fill( ['image'=> asset($path)] )->save();
        }

        $user->save();

        Session::flash('success',' Perfil atualizado com sucesso!');
        return redirect()->route('admin.index');
    }


} // end class
