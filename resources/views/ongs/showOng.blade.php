@extends('layouts.app')

@section('content')


<h1 class="nomeOng">{{$ong->name}}</h1>

<div class="infoOng">   
    <ul>
        <li  class="minhaOng">Id da ong: {{$ong->ong_id}}/</li>
        <li  class="minhaOng">Estado: {{$ong->estado}}/</li>
        <li  class="minhaOng">Cidade: {{$ong->cidade}}</li>
    </ul>
</div>

<div class="divPets">
@foreach ($pets as $pet)
<ul class="ulPet">
    <li class="liPet">{{$pet->name}}</li>
    <li class="liPet">{{$pet->species}}</li>
    <li class="liPet">{{$pet->age}}</li>
    <li class="liPet"><img height="150"src="{{ asset($pet->path)}}" alt="animal"></li>
</ul>
@endforeach
</div>


@endsection