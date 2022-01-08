@extends('layouts.app')

@section('content')


{!! Form::model([
    $pet, 'method'=>'patch', 'action'=>['App\Http\Controllers\PetsController@update', $pet->id]
]) !!}
{!! Form::label('name', 'Nome do Pet') !!}
{!! Form::text('name',$pet->name) !!}
{!! Form::label('ong_id', 'Id da ong') !!}
{!! Form::number('ong_id',$pet->ong_id) !!}
{!! Form::label('species', 'Especie') !!}
{!! Form::text('species',$pet->species) !!}
{!! Form::label('age', 'Idade') !!}
{!! Form::number('age',$pet->age) !!}
{!! Form::submit('Update') !!}

{!! Form::close() !!}

{!! Form::open([
    $pet, 'method'=>'delete', 'action'=>['App\Http\Controllers\PetsController@destroy', $pet->id]
]) !!}

{!! Form::submit('Deletar') !!}

{!! Form::close() !!}

{{-- <form method="post" action="/pets/{{$pet->id}}">

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
  {{--  </form></li>

// </form> --}}


@endsection