<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {

        $erro = '';
        if ($request->get('erro') == 1) {
            $erro = 'Usuário e ou senha não existe!';
        }

        return view('site.login', ['titulo' => 'login', 'erro' => $erro]);
    }

    public function autenticar(Request $request)
    {
        // regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required',
        ];

        // as mensagens de feedback de validações
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
            'senha.required' => 'O campo senha é obrigatório',
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        // Iniciar o model User
        $user = new User;

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if (isset($usuario->name)) {
            echo 'Usuario existe';
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
        echo '<pre>';
        print_r($usuario);
        echo '</pre>';
    }
}
