<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Post;

class PagesController extends Controller
{
    public function getIndex() {

        $posts = new Post;
        $posts = Post::orderBy('id','desc')->paginate(3);

        return view('pages.index')->with('posts', $posts);
    }

    public function getAbout() {

    	return view('pages/about');

    }

     public function getContato() {

        return view('pages/contato');
    }

     public function getProfissionais() {

        return view('pages/profissionais');
    }

    public function getDireitoBancario() {

        return view('pages/direito_bancario');
    }

    public function getDireitoCivil() {

        return view('pages/direito_civil');
    }

     public function getDireitoCriminal() {

        return view('pages/direito_criminal');
    }

     public function getDireitoFamilia() {

        return view('pages/direito_familia');
    }

      public function getDireitoImobiliario() {

        return view('pages/direito_imobiliario');
    }

      public function getDireitoMedico() {

        return view('pages/direito_medico');
    }

     public function getDireitoPrevidenciario() {

        return view('pages/direito_previdenciario');
    }

     public function getDireitoTrabalhista() {

        return view('pages/direito_trabalhista');
    }

     public function getDireitoTributario() {

        return view('pages/direito_tributario');
    }
}
