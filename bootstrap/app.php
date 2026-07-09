<?php

use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // registrando meus middlewares

        $middleware->alias([
            'log.acesso' => \App\Http\Middleware\LogAcessoMiddleware::class,
        ]);

        /*$middleware->web(append: [
            LogAcessoMiddleware::class,
        ]);*/
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
