@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Listagem de Produtos</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="">Novo</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">

            <div style="width: 90%; margin-left: auto; margin-right: auto;">
                <form method="post" action="">
                    <table border="1" width="100%">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Peso</th>
                                <th>Unidade ID</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($produtos as $produto)
                                <tr>
                                    <td>{{ $produto->nome }}</td>
                                    <td>{{ $produto->descricao }}</td>
                                    <td>{{ $produto->peso }}</td>
                                    <td>{{ $produto->unidade_id }}</td>
                                    <td><a href="">Excluir</td>
                                    <td><a href="">Editar</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    {{ $produtos->appends($request)->links('pagination::bootstrap-5') }}
                    <!--
                    <br>
                    {{ $produtos->count() }} - Total de registros por pagina
                    <br>
                    {{ $produtos->total() }} - Total de registros consultados
                    <br>
                    {{ $produtos->firstItem() }} - Numero do primeiro registros da pagina
                    <br>
                    {{ $produtos->lastItem() }} - Numero do ultimo registros da pagina
                    -->

                    <br>
                    Exibindo {{ $produtos->count() }} produtos de {{ $produtos->total() }} (de {{ $produtos->firstItem() }} a {{ $produtos->lastItem() }} )

            </div>

        </div>

    </div>
@endsection