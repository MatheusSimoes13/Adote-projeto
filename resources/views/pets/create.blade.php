@extends('layouts.app')


@section('content')


    {!! Form::open([
        'method'=>'post', 'route' => 'pets.store'
    ]) !!}
    {!! Form::label('name', 'Nome do Pet') !!}
    {!! Form::text('name') !!}
    {!! Form::label('ong_id', 'Id da ong') !!}
    {!! Form::number('ong_id') !!}
    {!! Form::label('species', 'Especie') !!}
    {!! Form::text('species') !!}
    {!! Form::label('age', 'Idade') !!}
    {!! Form::number('age') !!}
    {!! Form::submit('Enviar') !!}

    {!! Form::close() !!}

    {{-- <form method="post" action="/pets">
        <input type="text" name="name" placeholder="nome do pet">
        <input type="number" name="ong_id" placeholder="ID da ong">
        <input type="text" name="species" placeholder="gato/cachorro">
        <input type="number" name="age" placeholder="idade">
        {{ csrf_field() }}
        <input type="submit" value="enviar">
    </form> --}}

@endsection

