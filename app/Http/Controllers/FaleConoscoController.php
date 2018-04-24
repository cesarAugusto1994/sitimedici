<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FaleConosco;

class FaleConoscoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = FaleConosco::orderByDesc('created_at')->paginate();

        return view('admin.fale-conosco.index', compact('contatos'));
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
        $data = $request->request->all();

        $validator = $this->validator($data);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        FaleConosco::create($data);

        flash('Mensagem envida com sucesso.')->success()->important();

        return redirect()->route('fale_conosco');
    }

    protected function validator(array $data)
    {
        return \Illuminate\Support\Facades\Validator::make($data, [
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'telefone' => 'required|string|min:6',
            'empresa' => 'required|string|min:3',
            'mensagem' => 'required|string|min:6',
        ]);
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
        //
    }
}
