<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class SobreNosController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            // Aplica o middleware a todas as rotas do controller
            new Middleware(LogAcessoMiddleware::class),

            // Exemplo de como aplicar a apenas alguns métodos:
            // new Middleware(LogAcessoMiddleware::class, only: ['sobreNos']),

            // Exemplo de como aplicar a todos exceto alguns:
            // new Middleware(LogAcessoMiddleware::class, except: ['index']),
        ];
    }

    public function sobreNos()
    {
        return view('site.sobre-nos', ['titulo' => 'Sobre Nós']);
    }
}
