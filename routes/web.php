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

use App\Models\Auth\User;
use App\Models\Auth\Role;



Route::group(['middleware' => ['web']], function() {

	// -----  Site navigation routes ----- //

	Route::get('/', 'Pages\PagesController@getIndex')->name('index');
	Route::get('/about', 'Pages\PagesController@getAbout')->name('about');
	Route::get('/profissionais', 'Pages\PagesController@getProfissionais')->name('profissionais');
	Route::get('/direito_bancario', 'Pages\PagesController@getDireitoBancario')->name('direitobancario');
	Route::get('/direito_civil', 'Pages\PagesController@getDireitoCivil')->name('direitocivil');
	Route::get('/direito_criminal', 'Pages\PagesController@getDireitoCriminal')->name('direitocriminal');
	Route::get('/direito_familia', 'Pages\PagesController@getDireitoFamilia')->name('direitofamilia');
	Route::get('/direito_imobiliario', 'Pages\PagesController@getDireitoImobiliario')->name('direitoimobiliario');
	Route::get('/direito_medico', 'Pages\PagesController@getDireitoMedico')->name('direitomedico');
	Route::get('/direito_previdenciario', 'Pages\PagesController@getDireitoPrevidenciario')->name('direitoprevidenciario');
	Route::get('/direito_trabalhista', 'Pages\PagesController@getDireitoTrabalhista')->name('direitotrabalhista');
	Route::get('/direito_tributario', 'Pages\PagesController@getDireitoTributario')->name('direitotributario');

	Route::get('/contato', 'Pages\PagesController@getContato')->name('contato');

	// ** Send form routes

//////////////////////////////////////////

	// -----  Blog routes (all posts e single) ----- //

	Route::get('/posts', 'Blog\BlogController@getIndex')->name('blog.index');
	Route::get('/single/{slug}', 'Blog\BlogController@getSingle')->name('blog.single');
	Route::get('/blog/search', 'Blog\BlogController@getSearch')->name('blog.search');


//////////////////////////////////////////

	// -----  Admin routes ----- //

	// --- Posts---
	// create
	Route::get('/admin/create', 'Admin\PostsController@getCreate')->name('admin.create');
	Route::post('/admin/create', 'Admin\PostsController@setStore')->name('admin.store');
	// read all posts
	Route::get('/home', 'Admin\PostsController@getIndex')->name('admin.index');
	// show post info
	Route::get('/admin/show/{id}', 'Admin\PostsController@getShow')->name('admin.show');
	// edit
	Route::get('/admin/edit/{id}', 'Admin\PostsController@getEdit')->name('admin.edit');
	Route::post('/admin/edit/{id}', 'Admin\PostsController@setUpdate')->name('admin.update');
	// delete
	Route::post('/admin/delete/{id}', 'Admin\PostsController@setDestroy')->name('admin.delete');
	// search posts by tags
	Route::get('/admin/search', 'Admin\SearchController@getSearch')->name('admin.search');
	// search by keywords
	Route::get('/admin/search02', 'Admin\SearchController@getSearch02')->name('admin.search02');

	// --- User ---
	// read user account
	Route::get('/admin/{id}/account', 'Admin\AccountController@getIndex')->name('user.index');
	// show user account info
	Route::get('/admin/{id}/show', 'Admin\AccountController@getShow')->name('user.show');
	// edit user account
	Route::get('/admin/{id}/edit', 'Admin\AccountController@getEdit')->name('user.edit');
	Route::post('/admin/{id}/edit', 'Admin\AccountController@setUpdate')->name('user.update');
	
	
}); // end route group


// Authentication routes
Route::get('/admin', 'HomeController@getIndex')->name('admin.index')->middleware('auth');
Route::get('/home', function() {
	return redirect('/');
});

Route::get('/login', 'HomeController@getLogin')->name('login');
Auth::routes();