<h3>Fornecedor</h3>

{{-- Fica o comentário que será descartado --}}

@php
/*
    if(!<condicao>) {} // enquanto executa se o retorno for true
    if(isset($variavel)) {} // retornar true se a variável estiver definida
    if(empty($variavel)) {} // retorna true se a variável estiver vazia
*/
@endphp
{{-- @unless executa se o retorno for false --}}

@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Forncedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? ''}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? ''}}
        <br>
        @if($loop->first)
            Primeira iteração do Loop
        @endif

        @if($loop->last)
            Última iteração do Loop
            <br>
            Total de registros: {{ $loop->count }}
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados!
    @endforelse
@endisset
// o objero loop está disponível apenas para o foreach e o forelse


