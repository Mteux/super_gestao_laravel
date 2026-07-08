<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {

        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {

        $regras = [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000',

        ];

        $feedback = [
            'nome.min' => 'O campo nome precisa ter no minimo 3 caracteres',
            'nome.max' => 'O campo nome precisa ter no maximo 40 caracteres',
            'nome.unique' => 'O campo nome informado já esta em uso',
            'motivo_contatos_id' => 'O campo deve ser preenchido',
            'email.email' => 'O email informado não é valido',

            'required' => 'O campo :attribute deve ser preenchido',
            'mensagem.max' => 'A mensagem deve ter no maximo 2000 caracteres',
        ];

        $request->validate($regras, $feedback);
        SiteContato::create($request->all());

        return redirect()->route('site.index');
    }
}
