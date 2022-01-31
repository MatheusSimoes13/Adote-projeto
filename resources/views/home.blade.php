@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h1>Buscar Ong</h1>
        <button type="button" class="btn btn-primary" onclick="window.location='{{route("busca.id")}}'" >Buscar Ong por ID</button>
        <button type="button" class="btn btn-primary" onclick="window.location='{{route("busca.nome")}}'" >Buscar Ong por nome</button>
        {{-- <a href="/buscaOngId">Buscar Ong por Id</a>
        <a href="/buscaOngNome">Buscar Ong por Nome</a> --}}
    </div>
    <div class="areaOngHome">
    @if (Auth::check())
        <h1>Área de Ongs</h1>
        <button type="button" class="btn btn-primary" onclick="window.location='{{route("criarong")}}'">Criar Ong</button>
        @if (Auth::user()->ong)
            <button type="button" class="btn btn-primary" onclick="window.location='{{route("minhaong")}}'">Acessar minha ong</button>
        @endif

    @endif
    </div>

</div>
@endsection
