@extends('layouts.app')

@section('content')

    @foreach ($ongs as $ong)

        <li>{{$ong->name}}</li>
        <li>{{$ong->ong_id}}</li>

    @endforeach

@endsection