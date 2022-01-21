@extends('layouts.app')
        <link rel="stylesheet" href="{{asset('css/mostrarOng.css')}}">
@section('content')


<ul>
    <li>{{$ong->name}}</li>
    <li>{{$ong->ong_id}}</li>
    <li>{{$ong->cidade}}</li>
    <button type="button" class="btn btn-success" onclick="window.location= '{{route('mostrarOng',$ong->ong_id)}}'">Acessar Ong</button>
</ul>


@endsection