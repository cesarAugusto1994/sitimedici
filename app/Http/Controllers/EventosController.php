<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::paginate();

        return view('admin.eventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.eventos.create');
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

          $evento = new Evento();

          $evento->nome = $data['nome'];

          if($data['nome']) {
            $evento->data = \Datetime::createFromFormat('d/m/Y', $data['data']);
          }

          $evento->conteudo = $data['conteudo'];

          if(!empty($_FILES['imagem']) && !empty($_FILES['imagem']['name'])) {

            $destino = "img/" . $_FILES['imagem']['name'];
            $arquivo_tmp = $_FILES['imagem']['tmp_name'];

            move_uploaded_file( $arquivo_tmp, $destino  );

            $evento->imagem = $destino;
          }

          $evento->save();

          return redirect()->route('eventos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $evento = Evento::findOrFail($id);

        return view('admin.eventos.edit', compact('evento'));
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
