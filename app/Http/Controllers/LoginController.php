<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login', ['titulo' => 'login']);
    }

    public function autenticar()
    {
        return 'Chegamos até aqui!';
    }
}
