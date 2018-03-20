<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Noticias;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        //
        $categorias = session()->get('categorias');

        if(!$categorias) {
            session()->put('categorias', Categorias::all());
        }

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome')
        ->with('noticias', $this->getNoticias()->take(4))
        ->with('noticiaPrincipal', $this->getNoticias()->first())
        ->with('listaNoticias', $this->getNoticias()->take(-6));
    }

    public static function getNoticias()
    {
          $listaNoticias = Noticias::orderByDesc('created_at')->get();

          return $listaNoticias;
    }

    public function nossaHistoria()
    {
        return view('paginas/nossa_historia');
    }

    public function diretoria()
    {
        return view('paginas/diretoria');
    }

    public function faleConosco()
    {
        return view('paginas/fale_conosco');
    }
}
