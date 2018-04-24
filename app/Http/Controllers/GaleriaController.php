<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriaFotos;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeria = GaleriaFotos::paginate();

        return view('admin.galeria.index', compact('galeria'));
    }

    public function galeriaIndex()
    {
        $galeria = GaleriaFotos::orderByDesc('id')->paginate(24);

        return view('paginas.galeria', compact('galeria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->request->all();

            if(empty($_FILES['imagem']) && empty($_FILES['imagem']['name'])) {
                flash('Adicione uma imagem.')->error()->important();
                return back();
            }

            #dd($_FILES['imagem']);

            $arquivos = $_FILES['imagem'];

            foreach ($arquivos['name'] as $key => $item) {

                if(empty($item)) {
                  continue;
                }

                $galeria = new GaleriaFotos();
                $galeria->titulo = $data['titulo'];

                $destino = "img/$item";
                $arquivo_tmp = $arquivos['tmp_name'][$key];

                move_uploaded_file( $arquivo_tmp, $destino  );

                $galeria->link = $destino;
                $galeria->save();

            }


            flash('Imagem adicionada com sucesso.')->success()->important();

        } catch(Exception $e) {
            flash($e->getMessage())->error()->important();
        }

        return redirect()->route('galeria');
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
        try {

            $galeria = GaleriaFotos::findOrFail($id);
            $galeria->delete();

            flash('Imagem removida com sucesso.')->success()->important();

        } catch(Exception $e) {
            flash($e->getMessage())->error()->important();
        }

        return redirect()->route('galeria');
    }
}
