<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicos;

class ServicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicos = Servicos::paginate();

        return view('admin.servicos.index', compact('servicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servicos.create');
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

        $servico = new Servicos();
        $servico->nome = $data['nome'];

        if(!empty($_FILES['arquivo']) && !empty($_FILES['arquivo']['name'])) {
            $destino = "anexos/" . $_FILES['arquivo']['name'];
            $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
            move_uploaded_file( $arquivo_tmp, $destino  );
            $servico->url = $destino;
            $servico->is_file = true;

        } else {

            $servico->is_link = true;
            $servico->url = $data['url'];
        }

        if(isset($data['download'])) {

            $servico->download = true;

        }

        $servico->save();

        return redirect()->route('servicos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servico = Servicos::findOrFail($id);

        return view('admin.servicos.edit', compact('servico'));
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
        $data = $request->request->all();

        $servico = Servicos::findOrFail($id);
        $servico->nome = $data['nome'];

        if(!empty($_FILES['arquivo']) && !empty($_FILES['arquivo']['name'])) {
            $destino = "anexos/" . $_FILES['arquivo']['name'];
            $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
            move_uploaded_file( $arquivo_tmp, $destino  );
            $servico->url = $destino;
            $servico->is_file = true;

        } else {

            $servico->is_link = true;
            $servico->url = $data['url'];
        }

        if(isset($data['download'])) {

            $servico->download = true;

        }

        $servico->save();

        return redirect()->route('servicos');
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
