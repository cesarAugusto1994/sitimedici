<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sindicalizar;

class SindicalizarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Sindicalizar::paginate();

        return view('admin.sindicalize.index', compact('contatos'));
    }

    public function sindicalize()
    {
        return view('paginas.sindicalize');
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

        $sindicalizar = new Sindicalizar();
        $sindicalizar->nome = $data['nome'];
        $sindicalizar->email = $data['email'];
        if($data['nascimento']) {
          $sindicalizar->nascimento = \DateTime::createFromFormat('d/m/Y', $data['nascimento']);
        }
        $sindicalizar->sexo = $data['sexo'];
        $sindicalizar->estado_civil = $data['estado_civil'];
        $sindicalizar->naturalidade = $data['naturalidade'];
        $sindicalizar->telefone = $data['telefone'];
        $sindicalizar->celular = $data['celular'];
        $sindicalizar->grau_instrucao = $data['grau_instrucao'];
        $sindicalizar->identidade = $data['identidade'];
        $sindicalizar->ctps = $data['ctps'];
        $sindicalizar->cpf = $data['cpf'];
        $sindicalizar->cep = $data['cep'];
        $sindicalizar->logradouro = $data['logradouro'];
        $sindicalizar->numero = $data['numero'];
        $sindicalizar->bairro = $data['bairro'];
        $sindicalizar->cidade = $data['cidade'];
        $sindicalizar->estado = $data['estado'];
        $sindicalizar->empresa = $data['empresa'];
        $sindicalizar->funcao = $data['funcao'];
        $sindicalizar->matricula = $data['matricula'];
        if($data['admissao']) {
          $sindicalizar->admissao = \DateTime::createFromFormat('d/m/Y', $data['admissao']);
        }
        $sindicalizar->dependentes = $data['dependentes'];
        $sindicalizar->save();

        flash('Os seus dados foram enviados com sucesso.')->success()->important();

        return redirect()->route('sindicalize');

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
