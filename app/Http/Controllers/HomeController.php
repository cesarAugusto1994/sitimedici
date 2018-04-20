<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Categorias, Noticias, Banner};
use App\User;

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
        $banners = Banner::where('ativo', true)->get();

        $noticias = $this->getNoticias()->take(4);
        $noticiaPrincipal = $this->getNoticias()->first();
        $listaNoticias = $this->getNoticias()->take(-6);

        if($noticiaPrincipal) {
          $listaNoticias = $listaNoticias->whereNotIn('id', [$noticiaPrincipal->id]);
        }

        $listaNoticias = $listaNoticias->take(-6);

        $categorias = Categorias::all();

        return view('welcome', compact('banners', 'categorias'))
        ->with('noticias', $noticias)
        ->with('noticiaPrincipal', $noticiaPrincipal)
        ->with('listaNoticias', $listaNoticias);
    }

    public static function getNoticias()
    {
          $listaNoticias = Noticias::orderByDesc('created_at')->get();

          return $listaNoticias;
    }

    public static function ultimasNoticias()
    {
          $noticias = self::getNoticias()->take(4);

          return $noticias;
    }

    public static function listaNoticias()
    {
          $listaNoticias = Noticias::orderByDesc('created_at')->get();

          $noticiaPrincipal = self::getNoticiaPrincipal();

          if($noticiaPrincipal) {
            $listaNoticias = $listaNoticias->whereNotIn('id', [$noticiaPrincipal->id]);
          }

          $listaNoticias = $listaNoticias->take(-6);

          return $listaNoticias;
    }

    public static function getNoticiaPrincipal()
    {
        $listaNoticias = Noticias::orderByDesc('created_at')->get()->first();

        return $listaNoticias;
    }

    public static function categorias()
    {
        return Categorias::all();
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
