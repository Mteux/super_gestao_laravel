<h3>Fornecedor</h3>

@php
    /*
    if(isset(variavel)) { //enquanto executa se o retorno for true

    } 
    */
    
@endphp

@isset($fornecedores)
    @forelse ($fornecedores as $indice => $fornecedor)

        @dd($loop)
        Iteração atual : {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }} 
        <br>
        Status: {{ $fornecedor['status'] }} 
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}    
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}}
        <br>
        @if ($loop->first)
            Primeira iteração do loop
        @endif

        @if ($loop->last)
            Ultima iteração do loop

            
        @endif
        <br>
            Total de registros: {{  $loop->count }}
        <hr>

    @empty

        Não existem fornecedores cadastrados

    @endforelse
@endisset


