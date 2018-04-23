<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Categorias, Noticias, Banner, Evento, Servicos, Videos, GaleriaFotos, Configuracoes};
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

        $config = Configuracoes::all();

        if($config->isEmpty()) {
            $config = new Configuracoes();
            $config->nome = 'Sindicato dos Trabalhadores nas Industrias Metalúrgicas, Mecânicas e de Material Elétrico do Sul do Estado do Espirito Santo.';
            $config->informacoes = 'Para agendar homologação, pedir para enviar solicitação por e-mail com nome do funcionário e empresa. Nosso Horário de funcionamente é de 07:00hrs as 17:00hrs. E-mail sitimeci@hotmail.com Telefone: 28 3522-7759 Endereço: Rua Coronel Alziro Viana, Nº 134, Bairro: Aquidabã. CEP 29308110, próximo ao Detran.';
            $config->logo = 'logo/logo2.jpg';
            $config->save();
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

    public function pesquisar(Request $request)
    {
       $data = $request->request->all();

       $q = $data['q'];

       $parametro = $q;

       $noticias = Noticias::where('titulo', 'like', "%$q%")->take(5)->get();
       $eventos = Evento::where('nome', 'like', "%$q%")->take(5)->get();

       return view('paginas.pesquisar', compact('noticias', 'parametro', 'eventos'));
    }

    public static function getNoticias()
    {
          $listaNoticias = Noticias::orderByDesc('created_at')->get();

          return $listaNoticias;
    }

    public static function outrasNoticias()
    {
          $listaNoticias = Noticias::take(4)->orderByDesc('created_at')->get();

          return $listaNoticias;
    }

    public static function ultimasNoticias()
    {
          $noticias = self::getNoticias()->take(4);

          return $noticias;
    }

    public static function eventos()
    {
          $eventos = Evento::orderByDesc('created_at')->get()->take(4);

          return $eventos;
    }

    public static function video()
    {
          $video = Videos::orderByDesc('created_at')->get()->first();

          return $video;
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

    public static function servicos()
    {
        $servicos = Servicos::all();

        return $servicos;
    }

    public static function galeria()
    {
        $galeria = GaleriaFotos::all();

        return $galeria;
    }

    public static function config()
    {
        $config = Configuracoes::findOrFail(1);

        return $config;
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
