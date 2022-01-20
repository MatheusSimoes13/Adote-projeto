@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('css/mostrarOng.css')}}">

@section('content')

    @foreach ($ongs as $ong)
    <ul>
        <li>{{$ong->name}}</li>
        <li>{{$ong->ong_id}}</li>
        <li>{{$ong->cidade}}</li>
        <button type="button" class="btn btn-success" onclick="window.location= '{{route('mostrarOng')}}'">Acessar Ong</button>
    </ul>
    @endforeach

@endsection