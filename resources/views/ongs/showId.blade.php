@extends('layouts.app')
        <link rel="stylesheet" href="{{asset('css/mostrarOng.css')}}">
@section('content')

    <ul class="ulOng">
        <li>{{$ong->name}}</li>
        <li>{{$ong->ong_id}}</li>
        <li>{{$ong->cidade}}/{{$ong->estado}}</li>
        <li><img height="100" src="/images/{{$ong->foto}}" alt="ong foto"></li>
        <button type="button" class="btn btn-success" onclick="window.location= '{{route('mostrarOng',$ong->ong_id)}}'">Acessar Ong</button>
    </ul>

@endsection