@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('css/mostrarOng.css')}}">

@section('content')

    @foreach ($ongs as $ong)
    <ul class="ulOng">
        <li>Nome: {{$ong->name}}</li>
        <li>Id: {{$ong->ong_id}}</li>
        <li>Cidade: {{$ong->cidade}}/{{$ong->estado}}</li>
        <li><img height="100" src="{{asset($ong->foto)}}" alt="ong foto"></li>
        <button type="button" class="btn btn-success" onclick="window.location= '{{route('mostrarOng',$ong->ong_id)}}'">Acessar Ong</button>
    </ul>
    @endforeach

@endsection