<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticias;
use Auth;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.noticias.index')
        ->with('noticias', Noticias::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.noticias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->request->all();

        $noticia = new Noticias();

        $noticia->titulo = $data['titulo'];
        $noticia->subtitulo = $data['subtitulo'];
        $noticia->conteudo = $data['conteudo'];

        if(!empty($_FILES['imagem_1'])) {

          $destino = "images/" . $_FILES['imagem_1']['name'];
          $arquivo_tmp = $_FILES['imagem_1']['tmp_name'];

          move_uploaded_file( $arquivo_tmp, $destino  );

          $noticia->imagem_1 = $destino;
        }

        if(!empty($_FILES['imagem_2'])) {

          $destino = "images/" . $_FILES['imagem_2']['name'];
          $arquivo_tmp = $_FILES['imagem_2']['tmp_name'];

          move_uploaded_file( $arquivo_tmp, $destino  );

          $noticia->imagem_2 = $destino;
        }

        if(!empty($_FILES['imagem_3'])) {

          $destino = "images/" . $_FILES['imagem_3']['name'];
          $arquivo_tmp = $_FILES['imagem_3']['tmp_name'];

          move_uploaded_file( $arquivo_tmp, $destino  );

          $noticia->imagem_3 = $destino;
        }

        $noticia->usuario_id = Auth::user()->id;

        $noticia->save();

        return redirect()->route('noticias');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticias::find($id);
        return view('admin.noticias.edit')->with('noticia', $noticia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
