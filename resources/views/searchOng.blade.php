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

{{-- App\Http\Controllers\OngsController@buscarOngId --}}
{{-- 
<form method = "get"  action = "{{route(['ongs.buscaId',])}}">

    <label for="id">Id da Ong</label>
    <input type="number" name="id">
    <input type="submit" value="Procurar">


</form> --}}



@endsection