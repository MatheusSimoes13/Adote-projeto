@extends('layouts.app')


@section('content')

    {!! Form::open([
        'method'=>'post', 'route' => 'ongs.store'
    ]) !!}
    {!! Form::label('name', 'Nome da Ong') !!}
    {!! Form::text('name') !!}
    {!! Form::select('estado',['SP'=>'SP', 'RJ'=>'RJ'], null) !!}
    {!! Form::label('cidade', 'Cidade da ong') !!}
    {!! Form::text('cidade') !!}
    {!! Form::submit('Criar') !!}
    

    {!! Form::close() !!}

@if(count($errors) > 0)

    @foreach ($errors->all() as $error)

        <li>{{$error}}</li>

    @endforeach


@endif


@endsection