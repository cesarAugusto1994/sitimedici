<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::paginate();

        return view('admin.users.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    protected function validator(array $data, $isUpdate = false)
    {
        $validates = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ];

        if(!$isUpdate) {
          $validates['email'] = 'required|string|email|max:255|unique:users';
          $validates['password'] = 'required|string|min:6|confirmed';
        }

        return Validator::make($data, $validates);
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

      $user = User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => Hash::make($data['password']),
      ]);

      flash('Usuário adicionado com sucesso')->success()->important();

      return redirect()->route('usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::findOrFail($id);

        return view('admin.users.edit', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::findOrFail($id);

        return view('admin.users.edit', compact('usuario'));
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

        $validator = $this->validator($data, true);

        if($validator->fails()) {
          return back()->withErrors($validator)->withInput();
        }

        $user = User::findOrFail($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->save();

        flash('As informações deste usuário foram editadas com sucesso')->success()->important();

        return redirect()->route('usuarios');
    }

    public function changeSituation($id)
    {
        $user = User::findOrFail($id);

        $newStatus = !$user->active;
        $user->active = $newStatus;
        $user->save();

        $nome = $newStatus ? "ativado" : "desativado";

        $mensagem = "O usuario foi " . $nome . " com sucesso.";

        flash($mensagem)->success()->important();

        return redirect()->route('usuarios');
    }

    public function editPassword($id)
    {
        $usuario = User::findOrFail($id);

        return view('admin.users.password', compact('usuario'));
    }

    public function editPasswordHome()
    {
        $usuario = \Auth::user();

        return view('admin.users.password', compact('usuario'));
    }

    public function updatePassword(Request $request, $id)
    {
        $data = $request->request->all();

        $validates = [
            'password' => 'required|string|min:6',
        ];

        $validator = Validator::make($data, $validates);

        if($validator->fails()) {
          return back()->withErrors($validator)->withInput();
        }

        $user = User::findOrFail($id);
        $user->password = bcrypt($data["password"]);
        $user->save();

        flash("Senha atualizada com sucesso.")->success()->important();

        return redirect()->route('usuarios');
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
