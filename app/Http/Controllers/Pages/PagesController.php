<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Post;

class PagesController extends Controller
{

    // GET: all methods below
    public function index() {

        $posts = new Post;
        $posts = Post::orderBy('id','desc')->paginate(3);

        return view('pages.index')->with('posts', $posts);
    }

    public function about() {

    	return view('pages/about');

    }

     public function contato() {

        return view('pages/contato');
    }

  
     public function profissionais() {

        return view('pages/profissionais');
    }

    public function direitoBancario() {

        return view('pages/direito_bancario');
    }

    public function direitoCivil() {

        return view('pages/direito_civil');
    }

     public function direitoCriminal() {

        return view('pages/direito_criminal');
    }

     public function direitoFamilia() {

        return view('pages/direito_familia');
    }

      public function direitoImobiliario() {

        return view('pages/direito_imobiliario');
    }

      public function direitoMedico() {

        return view('pages/direito_medico');
    }

     public function direitoPrevidenciario() {

        return view('pages/direito_previdenciario');
    }

     public function direitoTrabalhista() {

        return view('pages/direito_trabalhista');
    }

     public function direitoTributario() {

        return view('pages/direito_tributario');
    }
    
} // end class
