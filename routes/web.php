<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\User;
use App\Models\User\Role;


Route::group(['middleware' => ['web']], function() {

	// -----  Site navigation routes ----- //

	Route::get('/', 'Pages\PagesController@index')->name('index');
	Route::get('/about', 'Pages\PagesController@about')->name('about');
	Route::get('/profissionais', 'Pages\PagesController@profissionais')->name('profissionais');
	Route::get('/direito_bancario', 'Pages\PagesController@direitoBancario')->name('direitobancario');
	Route::get('/direito_civil', 'Pages\PagesController@direitoCivil')->name('direitocivil');
	Route::get('/direito_criminal', 'Pages\PagesController@direitoCriminal')->name('direitocriminal');
	Route::get('/direito_familia', 'Pages\PagesController@direitoFamilia')->name('direitofamilia');
	Route::get('/direito_imobiliario', 'Pages\PagesController@direitoImobiliario')->name('direitoimobiliario');
	Route::get('/direito_medico', 'Pages\PagesController@direitoMedico')->name('direitomedico');
	Route::get('/direito_previdenciario', 'Pages\PagesController@direitoPrevidenciario')->name('direitoprevidenciario');
	Route::get('/direito_trabalhista', 'Pages\PagesController@direitoTrabalhista')->name('direitotrabalhista');
	Route::get('/direito_tributario', 'Pages\PagesController@direitoTributario')->name('direitotributario');

	Route::get('/contato', 'Pages\PagesController@contato')->name('contato');

	// ** Send form routes

//////////////////////////////////////////

	// -----  Blog routes (all posts e single) ----- //

	Route::get('/posts', 'Blog\BlogController@index')->name('blog.index');
	Route::get('/single/{slug}', 'Blog\BlogController@single')->name('blog.single');
	Route::get('/blog/search', 'Blog\BlogController@search')->name('blog.search');


//////////////////////////////////////////

	// ----- DASHBOARD ROUTES ----- //

	// --- POSTS ---
	// Create
	Route::get('/dashboard/create', 'Admin\PostsController@create')->name('post.create');
	Route::post('/dashboard/create', 'Admin\PostsController@store')->name('post.store');
	// Show post info
	Route::get('/dashboard/show/{id}', 'Admin\PostsController@show')->name('post.show');
	// Edit
	Route::get('/dashboard/edit/{id}', 'Admin\PostsController@edit')->name('post.edit');
	Route::post('/dashboard/edit/{id}', 'Admin\PostsController@update')->name('post.update');
	// Delete
	Route::post('/dashboard/delete/{id}', 'Admin\PostsController@destroy')->name('post.delete');
	// Search posts by tags
	Route::get('/dashboard/search', 'Admin\SearchController@search')->name('post.search');
	// Search by keywords
	Route::get('/dashboard/search02', 'Admin\SearchController@search02')->name('post.search02');

	// --- CATEGORIAS---
	// Read all
	Route::get('/dashboard/categoria', 'Admin\CategoryController@index')->name('categoria.index');
	// Create 
	Route::get('/dashboard/categoria/create', 'Admin\CategoryController@create')->name('categoria.create');
	Route::post('/dashboard/categoria/create', 'Admin\CategoryController@store')->name('categoria.store');
	// Edit
	Route::get('/dashboard/categoria/edit/{id}', 'Admin\CategoryController@edit')->name('categoria.edit');
	Route::post('/dashboard/categoria/edit/{id}', 'Admin\CategoryController@update')->name('categoria.update');
	// Delete
	Route::post('/dashboard/categoria/delete/{id}', 'Admin\CategoryController@destroy')->name('categoria.delete');

	// --- User ---
	// read user account
	Route::get('/author/{id}/account', 'Admin\AccountController@index')->name('user.index');
	// show user account info
	Route::get('/author/{id}/show', 'Admin\AccountController@show')->name('user.show');
	// edit user account
	Route::get('/author/{id}/edit', 'Admin\AccountController@edit')->name('user.edit');
	Route::post('/author/{id}/edit', 'Admin\AccountController@update')->name('user.update');

	// --- Users Permissions---
	/// Create user permission
	Route::get('/create', function () {

		// $user = User::find(2);

		// $role = new Role;
		// $role->name = "Author";

		// $user->roles()->save($role);

  //   	return "Permissão criada com sucesso!";

	});

	// Read user permission
	Route::get('/read', function () {

		// $user = User::findOrFail(2);

	 //    foreach ($user->roles as $role) {
	    	
	 //    	echo "O usuário " .$user->name. " tem permissão de: ".$role->name."<br />";
	 //    }
	});

	
}); // end route group


// Authentication routes
Route::get('/dashboard', 'HomeController@index')->name('post.index')->middleware('auth');
Route::get('/home', function() {
	return redirect('/');
});

Route::get('/login', 'HomeController@login')->name('login');
Auth::routes();