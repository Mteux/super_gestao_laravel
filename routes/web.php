<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return "seja bem vindo, corno";
});
*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])
    ->name('site.index');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'salvar'])->name('site.contato');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('site.login');

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'autenticar'])->name('site.login');

Route::middleware('autenticacao:padrao,visitante')->prefix('/app')->group(function () {

    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])
        ->name('app.home');

    Route::get('/sair', [\App\Http\Controllers\LoginController::class, 'sair'])
        ->name('app.sair');

    Route::get('/cliente', [\App\Http\Controllers\ClienteController::class, 'index'])
        ->name('app.cliente');

    Route::get('/fornecedor', [\App\Http\Controllers\FornecedorController::class, 'index'])
        ->name('app.fornecedor');

    Route::get('/fornecedor/adicionar', [\App\Http\Controllers\FornecedorController::class, 'adicionar'])
        ->name('app.fornecedor.adicionar');

    Route::post('/fornecedor/adicionar', [\App\Http\Controllers\FornecedorController::class, 'adicionar'])
        ->name('app.fornecedor.adicionar');

    Route::post('/fornecedor/listar', [\App\Http\Controllers\FornecedorController::class, 'listar'])
        ->name('app.fornecedor.listar');

    Route::get('/fornecedor/listar', [\App\Http\Controllers\FornecedorController::class, 'listar'])
        ->name('app.fornecedor.listar');

    Route::get('/fornecedor/editar/{id}/{msg?}', [\App\Http\Controllers\FornecedorController::class, 'editar'])
        ->name('app.fornecedor.editar');

    Route::get('/produto', [\App\Http\Controllers\ProdutoController::class, 'index'])
        ->name('app.produto');
});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> Clique aqui para ir para a página inicial';
});
