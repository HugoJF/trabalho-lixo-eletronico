<div class="jumbotron">
    <h2>Nome: {{ $location->name }}</h2>

    <h3>Cidade: {{ $location->city }}</h3>

    <p>Endereco: {{ $location->address }}</p>

    <p>Descricao: {{ $location->description}}</p>

    <p><a class="btn btn-default btn-lg" href="{{ route('location-view', ['id' => $location->id]) }}" role="button">Mais informacoes</a></p>
</div>