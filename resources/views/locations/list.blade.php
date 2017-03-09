@extends('layouts.app')


@section('content')

    <div class="row">


        <div class="col-md-8 col-md-offset-2">
            <br>
            <br>

            <div class="container">
                <h1>Centros de reciclagem em {{ \Illuminate\Support\Facades\Config::get('static.estados')[$state] }}</h1>
                <br>
                @forelse($locations as $location)
                    @include('partials.location')
                @empty
                    <h1>Nenhum local cadastrado no estado</h1>
                @endforelse
            </div>
        </div>
    </div>
@endsection