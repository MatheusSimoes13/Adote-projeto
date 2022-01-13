@extends('layouts.app')

@section('content')


<div class="IdOng">

    {!! Form::open([
        'method' => 'get', 'route'=>'ongs.buscaId'
    ]) !!}
    
        {!! Form::label('id', 'Id da Ong') !!}
        {!! Form::number('id') !!}
        {!! Form::submit('Procurar') !!}

        {!! Form::token() !!}

        
    {!! Form::close() !!}
</div>

@endsection