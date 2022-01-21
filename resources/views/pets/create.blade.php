@extends('layouts.app')


@section('content')


    {!! Form::open([
        'method'=>'post', 'route' => 'pets.store', 'files'=>true
    ]) !!}
    {!! Form::label('name', 'Nome do Pet') !!}
    {!! Form::text('name') !!}
    {!! Form::label('species', 'Especie') !!}
    {!! Form::text('species') !!}
    {!! Form::label('age', 'Idade') !!}
    {!! Form::number('age') !!}
    {!! Form::label('contact', 'Contato') !!}
    {!! Form::text('contact') !!}
    {!! Form::file('fotopet') !!}

    {!! Form::submit('Enviar') !!}

    {!! Form::close() !!}

    @if(count($errors) > 0)

        @foreach ($errors->all() as $error)

            <li>{{$error}}</li>

        @endforeach

    @endif

@endsection

