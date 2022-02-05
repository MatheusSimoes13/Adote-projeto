@extends('layouts.app')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="{{ asset('css/mostrarOng.css')}}">
@section('content')

<input type="text" id="input" onkeyup="filtro()" placeholder="Procurar nome">

<div class="ongs">
    <div class="w3-row">
        @foreach ($ongs as $ong)
            <ul class="ulOng">
                <li class="name"><span class="text">{{$ong->name}}</span></li>
                <li>Id: {{$ong->ong_id}}</li>
                <li><span class="text"> Cidade: {{$ong->cidade}}/{{$ong->estado}}</span></li>
                <li><img height="100" src="/images/{{$ong->foto}}" alt="ong foto"></li>
                <button type="button" class="btn btn-success" onclick="window.location= '{{route('mostrarOng',$ong->ong_id)}}'">Acessar Ong</button>
            </ul>
        @endforeach
    </div>
</div>


<script src="{{asset('js/filter.js')}}"></script>

@endsection