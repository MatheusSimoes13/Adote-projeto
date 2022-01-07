@extends('layouts.app')

@section('content')

    @foreach ($pets as $pet)

        <li><a href="{{route('pets.show', $pet->id)}}">{{$pet->name}}</a>
            <a href="{{route('pets.edit', $pet->id)}}">Editar</a>
        
    @endforeach

@endsection