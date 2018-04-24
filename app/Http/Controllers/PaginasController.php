<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paginas;
use App\Models\Categorias;
USE Auth;

class PaginasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginas = Paginas::paginate();

        return view('admin.paginas.index', compact('paginas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categorias::all();

        return view('admin.paginas.create', compact('categorias'));
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

          $pagina = new Paginas();

          $pagina->titulo = $data['titulo'];
          $pagina->categoria_id = $data['categoria_id'];
          $pagina->conteudo = $data['conteudo'];

          $pagina->url = $data['url'];

          if($data['url']) {
            $pagina->is_link = true;
          } else {
            $pagina->is_link = false;
          }

          $pagina->save();

          return response()->json(
              [
                  'code' => 201,
                  'message' => 'salvo com sucesso',
              ]
          );

        } catch (Exception $e) {

          return response()->json([
                  'code' => $e->getCode(),
                  'message' => $e->getMessage(),
              ]
          );

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagina = Paginas::findOrFail($id);

        return view('admin.paginas.details', compact('pagina'));
    }

    public function exibir($id)
    {
        $pagina = Paginas::findOrFail($id);
        $categorias = Categorias::all();

        return view('paginas.pagina', compact('pagina', 'categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagina = Paginas::findOrFail($id);
        $categorias = Categorias::all();

        return view('admin.paginas.edit', compact('pagina', 'categorias'));
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

          $pagina = Paginas::findOrFail($id);

          $pagina->titulo = $data['titulo'];
          $pagina->categoria_id = $data['categoria_id'];
          $pagina->conteudo = $data['conteudo'];

          $pagina->url = $data['url'];

          if($data['url']) {
            $pagina->is_link = true;
          } else {
            $pagina->is_link = false;
          }

          $pagina->save();

          return response()->json(
              [
                  'code' => 201,
                  'message' => 'salvo com sucesso',
              ]
          );

        } catch (Exception $e) {

          return response()->json([
                  'code' => $e->getCode(),
                  'message' => $e->getMessage(),
              ]
          );

        }
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
