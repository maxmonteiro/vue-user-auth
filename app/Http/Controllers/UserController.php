<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postUser(Request $request)
    {
        // Instanciando novo objeto usuario
        $user = new User();
        // Atribuindo a solicitacao no objeto criado
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // criptografando senha
        $user->password = bcrypt($request->input('password'));
        // Gravando o registro no banco
        $user->save();
        // retornando o json com o registro criado e o código de sucesso
        return response()->json(['data' => $user], 201);
    }

    public function getUsers()
    {
        // Usando eloquent para recuperar os registros do banco
        $users = User::all();
        // Criando uma variavel de resposta com os dados consultados
        $response = [
            'data' => $users
        ];
        // Retornando um json com a variavel de resposta criada e o código de sucesso
        return response()->json($response, 200);
    }

    public function putUser(Request $request, $id)
    {
        // Buscamos o registro


    }

    public function deleteUser($id)
    {

    }
}
