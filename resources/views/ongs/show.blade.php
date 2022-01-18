@extends('layouts.app')


@section('content')

    <h1>Minha Ong</h1>
    <li>{{$minhaOng->name}}</li>
    <li>{{$minhaOng->ong_id}}</li>
    <li>{{$minhaOng->estado}}</li>
    <li>{{$minhaOng->cidade}}</li>

    <a href="/criarPet">Adicionar novo Pet</a>

    @foreach ($petsOng as $pet)
        <ul>
            <li>{{$pet->name}}</li>
            <li>{{$pet->species}}</li>
            <li>{{$pet->age}}</li>
            <li>{{$pet->path}}</li>
        </ul>
    @endforeach


@endsection