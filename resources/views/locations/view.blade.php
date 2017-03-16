@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <br>
            <h2>Detalhes de {{ $location->name }}</h2>
            @include('partials.location', ['fullview' => true])
        </div>
    </div>
@endsection