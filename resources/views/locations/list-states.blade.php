@extends('layouts.app')


@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Selecione um estado:</h1>
            @foreach(\Illuminate\Support\Facades\Config::get('static.estados') as $sigla=>$estado)
                    <div class="col-md-6">
                        <h3><a href="{{ route('locations', ['state' => $sigla]) }}">{{ $estado }}</a></h3>
                    </div>
            @endforeach
    </div>
@endsection