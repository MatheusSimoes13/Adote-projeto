@extends('layouts.app')

@section('content')

<form method="post" action="/pets/{{$pet->id}}">

    <input type="hidden" name="_method" value="put">

    <input type="text" name="name" placeholder="nome do pet" value="{{$pet->name}}">
    <input type="number" name="ong_id" placeholder="ID da ong" value="{{$pet->ong_id}}">
    <input type="text" name="species" placeholder="gato/cachorro" value="{{$pet->species}}">
    <input type="number" name="age" placeholder="idade" value="{{$pet->age}}">
    {{ csrf_field() }}
    <input type="submit" value="enviar">

    <form method="post" action="/pets/{{$pet->id}}">
        <input type="hidden" name="_method" value="delete">    
        <input type="submit" value="Deletar">
        {{-- {{ csrf_field() }} --}}
    </form></li>

</form>


@endsection