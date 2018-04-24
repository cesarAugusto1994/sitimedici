<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracoes;

class ConfiguracoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = Configuracoes::findOrFail(1);

        return view('admin.configuracoes.edit', compact('config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
      try {
          $data = $request->request->all();

          $config = Configuracoes::findOrFail(1);

          $config->nome = $data['nome'];
          $config->informacoes = $data['conteudo'];

          if(!empty($_FILES['imagem']) && !empty($_FILES['imagem']['name'])) {

            $destino = "img/" . $_FILES['imagem']['name'];
            $arquivo_tmp = $_FILES['imagem']['tmp_name'];

            move_uploaded_file( $arquivo_tmp, $destino  );

            $config->logo = $destino;
          }

          if(!empty($_FILES['background']) && !empty($_FILES['background']['name'])) {

            $destino = "img/" . $_FILES['background']['name'];
            $arquivo_tmp = $_FILES['background']['tmp_name'];

            move_uploaded_file( $arquivo_tmp, $destino  );

            $config->background = $destino;
          }
          
          $config->save();

          flash('Salvo com sucesso.')->success()->important();

        } catch (Exception $e) {

          flash($e->getMessage())->error()->important();

        }

        return redirect()->route('config');
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
