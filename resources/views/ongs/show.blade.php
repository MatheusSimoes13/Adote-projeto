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

    <div class="botoesFuncao">
        
        <button type="button" class="btn btn-success" onclick="window.location='{{route("pets.criar")}}'">Adicionar novo Pet</button>
        <button type="button" class="btn btn-success" onclick="window.location='{{route("ongs.edit", $minhaOng)}}'">Editar Ong</button>
        {{-- <button type="button" formmethod="delete" class="btn btn-danger" onclick="window.location='{{route("ongs.destroy", $minhaOng)}}'">Deletar Ong</button> --}}
        <form action="{{route("ongs.destroy",$minhaOng)}}" method="POST">
            @method('delete')
            {{ csrf_field() }}
            <input type="submit" class="btn btn-danger" value="Deletar Ong" onclick="return confirm('Deletar?')">
        </form>
        
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
                        <input type="submit" class="btn btn-danger" value='X' onclick="return confirm('Deletar?')">
                    </form>
                </li>
            </ul>
            @endforeach
        </div>






@endsection