<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();

        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banners.create');
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

        if(!empty($_FILES['imagem']) && empty($data['link'])) {

        }

        $banner = new Banner();

        $banner->titulo = $data['titulo'];

        if(!empty($_FILES['imagem'])) {

          $destino = "img/" . $_FILES['imagem']['name'];
          $arquivo_tmp = $_FILES['imagem']['tmp_name'];

          move_uploaded_file( $arquivo_tmp, $destino  );

          $banner->link = $destino;
          $banner->is_external_link = false;

        } else {

            $banner->link = $data['link'];
            $banner->is_external_link = true;

        }

        $banner->save();

        return redirect()->route('banners');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.edit', compact('banner'));
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
        $banner = Banner::findOrFail($id);

        if (file_exists($banner->link)) {
            unlink($banner->link);
        }

        $banner->delete();

        return redirect()->route('banners');
    }
}
