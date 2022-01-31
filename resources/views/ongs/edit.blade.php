@extends('layouts.app')


@section('content')

    {!! Form::open([
        'method'=>'post', 'route' => ['ongs.update',$ong], 'files'=>true
    ]) !!}
    @method('PATCH')
    {!! Form::label('name', 'Nome da Ong') !!}
    {!! Form::text('name',$ong->name) !!}
    {!! Form::select('estado',['SP'=>'SP', 'RJ'=>'RJ'], null) !!}
    {!! Form::label('cidade', 'Cidade da ong') !!}
    {!! Form::text('cidade',$ong->cidade) !!}
    <img src="{{asset('images/'.$ong->foto)}}" alt="asd" height="100">
    {!! Form::file('foto') !!}
    {!! Form::submit('Editar') !!}

    {!! Form::close() !!}

    @if(count($errors) > 0)

        @foreach ($errors->all() as $error)

            <li>{{$error}}</li>

        @endforeach


    @endif


@endsection