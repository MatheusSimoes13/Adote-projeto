@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('css/minhaOng.css')}}">


@section('content')

    <h1 class="nomeOng">{{$minhaOng->name}}</h1>

        <div class="infoOng">   
            <ul>
                <li  class="minhaOng">Id da ong: {{$minhaOng->ong_id}}/</li>
                <li  class="minhaOng">Estado: {{$minhaOng->estado}}/</li>
                <li  class="minhaOng">Cidade: {{$minhaOng->cidade}}</li>
            </ul>
        </div>


    {{-- <a href="/criarPet">Adicionar novo Pet</a> --}}
    <div class="botaoCriarPet">
        <button type="button" class="btn btn-success" onclick="window.location='{{route("pets.create")}}'">Adicionar novo Pet</button>
    </div>

        <div class="divPets">
            @foreach ($petsOng as $pet)
            <ul class="ulPet">
                <li class="liPet">{{$pet->name}}</li>
                <li class="liPet">{{$pet->species}}</li>
                <li class="liPet">{{$pet->age}}</li>
                <li class="liPet"><img height="150"src="{{ asset($pet->path)}}" alt="animal"></li>
            </ul>
            @endforeach
        </div>






@endsection