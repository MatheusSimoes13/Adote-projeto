@extends('layouts.app')


@section('content')

    <form method="post" action="/pets">
        <input type="text" name="name" placeholder="nome do pet">
        <input type="number" name="ong_id" placeholder="ID da ong">
        <input type="text" name="species" placeholder="gato/cachorro">
        <input type="number" name="age" placeholder="idade">
        {{ csrf_field() }}
        <input type="submit" value="enviar">
    </form>

@endsection