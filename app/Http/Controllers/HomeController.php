<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        session()->forget('categorias');

        session()->put('categorias', Categorias::all());

        session()->flash('status', 'Task was successful!');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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
