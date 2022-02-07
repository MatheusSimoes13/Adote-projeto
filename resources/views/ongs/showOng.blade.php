@extends('layouts.app')

    <link rel="stylesheet" href="{{asset('css/minhaOng.css')}}">

@section('content')

<div class="cardOng">
    <h1 class="nomeOng">{{$ong->name}}</h1>
        <ul class="ulMinhaOng">
            <li  class="minhaOng">Id da ong: {{$ong->ong_id}}</li>
            <li  class="minhaOng">{{$ong->cidade}}/{{$ong->estado}}</li>
        </ul>
        <div id="fotoOng">
            <img height="150" src="/images/{{$ong->foto}}" alt="fotoOng">
        </div>
</div>

    @if($pets!=null)
        <div class="divPets">
            @foreach ($pets as $pet)
                <ul class="ulPet">
                    <li class="liPet">{{$pet->name}}</li>
                    <li class="liPet">{{$pet->species}}</li>
                    <li class="liPet">{{$pet->age}}</li>
                    <li class="liPet"><img height="150"src="{{ asset($pet->path)}}" alt="animal"></li>
                    <li class="liPet">{{$pet->contact}}</li>
                </ul>
            @endforeach
        </div>

    @else
        <p>não tem pets</p>
    @endif
@endsection