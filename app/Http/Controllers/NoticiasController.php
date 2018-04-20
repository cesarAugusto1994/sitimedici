<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;
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

        try {

        $data = $request->request->all();

        $noticia = new Noticias();

        $noticia->titulo = $data['titulo'];
        $noticia->subtitulo = $data['subtitulo'];
        $noticia->conteudo = $data['conteudo'];
        $noticia->conteudo_html = $data['conteudo_html'];

        if(!empty($_FILES['imagem_1']) && !empty($_FILES['imagem_1']['name'])) {

          $destino = "img/" . $_FILES['imagem_1']['name'];
          $arquivo_tmp = $_FILES['imagem_1']['tmp_name'];

          move_uploaded_file( $arquivo_tmp, $destino  );

          $noticia->imagem_1 = $destino;
        }

        if(!empty($_FILES['imagem_2']) && !empty($_FILES['imagem_2']['name'])) {

          $destino = "img/" . $_FILES['imagem_2']['name'];
          $arquivo_tmp = $_FILES['imagem_2']['tmp_name'];

          move_uploaded_file( $arquivo_tmp, $destino  );

          $noticia->imagem_2 = $destino;
        }

        if(!empty($_FILES['imagem_3']) && !empty($_FILES['imagem_3']['name'])) {

          $destino = "img/" . $_FILES['imagem_3']['name'];
          $arquivo_tmp = $_FILES['imagem_3']['tmp_name'];

          move_uploaded_file( $arquivo_tmp, $destino  );

          $noticia->imagem_3 = $destino;
        }

        $noticia->usuario_id = Auth::user()->id;

        $noticia->save();

        return response()->json(
            [
                'code' => 201,
                'message' => 'salvo com sucesso',
            ]
        );

      } catch (Exception $e) {

        return response()->json([
                'code' => 100,
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
        $noticia = Noticias::find($id);
        return view('admin.noticias.edit')->with('noticia', $noticia);
    }

    public function exibir($id)
    {
        $noticia = Noticias::findOrFail($id);

        return view('paginas.noticia')->with('noticia', $noticia)
        ->with('noticias', Noticias::all());
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

            $noticia = Noticias::findOrFail($id);

            $noticia->titulo = $data['titulo'];
            $noticia->subtitulo = $data['subtitulo'];
            $noticia->conteudo = $data['conteudo'];
            $noticia->conteudo_html = $data['conteudo_html'];

            if(!empty($_FILES['imagem_1']) && !empty($_FILES['imagem_1']['name'])) {

              $destino = "img/" . $_FILES['imagem_1']['name'];
              $arquivo_tmp = $_FILES['imagem_1']['tmp_name'];

              move_uploaded_file( $arquivo_tmp, $destino  );

              $noticia->imagem_1 = $destino;
            }

            if(!empty($_FILES['imagem_2']) && !empty($_FILES['imagem_2']['name'])) {

              $destino = "img/" . $_FILES['imagem_2']['name'];
              $arquivo_tmp = $_FILES['imagem_2']['tmp_name'];

              move_uploaded_file( $arquivo_tmp, $destino  );

              $noticia->imagem_2 = $destino;
            }

            if(!empty($_FILES['imagem_3']) && !empty($_FILES['imagem_3']['name'])) {

              $destino = "img/" . $_FILES['imagem_3']['name'];
              $arquivo_tmp = $_FILES['imagem_3']['tmp_name'];

              move_uploaded_file( $arquivo_tmp, $destino  );

              $noticia->imagem_3 = $destino;
            }

            $noticia->usuario_id = Auth::user()->id;

            $noticia->save();

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
