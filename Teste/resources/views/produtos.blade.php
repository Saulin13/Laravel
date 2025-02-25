@extends('layouts.main')

@section('title', 'Pagina de Produtos')

@section('content')

    <H1>Essa é a pagina de produtos</H1>

    @if($busca != ' ')
        <p>O usuário está buscando por {{ $busca }}</p>
    @endif


@endsection