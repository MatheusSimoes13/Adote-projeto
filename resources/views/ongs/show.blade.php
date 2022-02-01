@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('css/minhaOng.css')}}">


@section('content')

    <div class="cardOng">
        <h1 class="nomeOng">{{$minhaOng->name}}</h1>
            <ul class="ulMinhaOng">
                <li  class="minhaOng">Id da ong: {{$minhaOng->ong_id}}</li>
                <li  class="minhaOng">{{$minhaOng->cidade}}/{{$minhaOng->estado}}</li>
            </ul>
            <div id="fotoOng">
                <img height="150" src="/images/{{$minhaOng->foto}}" alt="fotoOng">
            </div>
    </div>


    {{-- <a href="/criarPet">Adicionar novo Pet</a> --}}
    <div class="botaoCriarPet">
        
        <button type="button" class="btn btn-success" onclick="window.location='{{route("pets.criar")}}'">Adicionar novo Pet</button>
        {{-- <button type="button" class="btn btn-success" onclick="window.location='{{route("ongs.edit",$minhaOng)}}">Editar Ong</button> --}}
        <button type="button" class="btn btn-success" onclick="window.location='{{route("ongs.edit", $minhaOng)}}'">Editar Ong</button>

    </div>

        <div class="divPets">
            @foreach ($petsOng as $pet)
            <ul class="ulPet">
                <li class="liPet">{{$pet->name}}</li>
                <li class="liPet">{{$pet->species}}</li>
                <li class="liPet">{{$pet->age}}</li>
                <li class="liPet"><img height="150"src="{{ asset($pet->path)}}" alt="animal"></li>
                <li class="liPet">{{$pet->contact}}</li>
                <li class="liPet">
                    <form method="POST" action="{{route('pets.destroy',$pet)}}">
                        @method('DELETE')
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger" value='X'>
                    </form>
                </li>
            </ul>
            @endforeach
        </div>






@endsection