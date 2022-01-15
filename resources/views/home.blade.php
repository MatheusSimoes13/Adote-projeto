@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a href="/buscaOngId">Buscar Ong por Id</a>
        <a href="/buscaOngNome">Buscar Ong por Nome</a>

    @if (Auth::check())
        <a href="/criarOng">Criar Ong</a>
    @endif

    </div>
</div>
@endsection
