@extends('layouts.app')

@section('content')

<div class="NomeOng">

    {!! Form::open([
        'method' => 'get', 'route'=>'ongs.buscaNome'
    ]) !!}
    
        {!! Form::label('name', 'Nome da Ong') !!}
        {!! Form::text('name') !!}
        {!! Form::submit('Procurar') !!}

        {!! Form::token() !!}

        
    {!! Form::close() !!}
</div>

@endsection