<div class="jumbotron">
    <div class="row">
        <div class="col-md-6">
            <h2>Nome: {{ $location->name }}</h2>

            <h3>Cidade: {{ $location->city }}</h3>

            <p>Endereco: {{ $location->address }}</p>

            <p>Descricao: {{ $location->description}}</p>
        </div>
        <div class="col-md-6">
            @if($location->getAttribute('monitores-televisores-lcd'))
                <label class="checkbox checked" for="monitores-televisores-lcd">
                    <span class="icons"><span style="opacity: 1!important;" class="second-icon fa fa-check-square-o"></span></span> Monitores e televisores LCD
                </label>
            @endif
            @if($location->getAttribute('monitores-televisores-crt'))
                <label class="checkbox checked" for="monitores-televisores-crt">
                    <span class="icons"><span style="opacity: 1!important;" class="second-icon fa fa-check-square-o"></span></span> Monitores e televisores CRT
                </label>
            @endif
            @if($location->getAttribute('lampadas'))
                <label class="checkbox checked" for="lampadas">
                    <span class="icons"><span style="opacity: 1!important;" class="second-icon fa fa-check-square-o"></span></span> Lampadas
                </label>
            @endif
            @if($location->getAttribute('pilhas-baterias'))
                <label class="checkbox checked" for="pilhas-baterias">
                    <span class="icons"><span style="opacity: 1!important;" class="second-icon fa fa-check-square-o"></span></span> Pilhas e baterias
                </label>
            @endif
            @if($location->getAttribute('toners'))
                <label class="checkbox checked" for="toners">
                    <span class="icons"><span style="opacity: 1!important;" class="second-icon fa fa-check-square-o"></span></span> Toners
                </label>
            @endif
            @if($location->getAttribute('impressoras'))
                <label class="checkbox checked" for="impressoras">
                    <span class="icons"><span style="opacity: 1!important;" class="second-icon fa fa-check-square-o"></span></span> Impressoras
                </label>
            @endif
            @if($location->getAttribute('computadores'))
                <label class="checkbox checked" for="computadores">
                    <span class="icons"><span style="opacity: 1!important;" class="second-icon fa fa-check-square-o"></span></span> Computadores
                </label>
            @endif
            @if($location->getAttribute('celulares'))
                <label class="checkbox checked" for="celulares">
                    <span class="icons"><span style="opacity: 1!important;" class="second-icon fa fa-check-square-o"></span></span> Celulares
                </label>
            @endif
            @if($location->getAttribute('cameras-fotograficas'))
                <label class="checkbox checked" for="cameras-fotograficas">
                    <span class="icons"><span style="opacity: 1!important;" class="second-icon fa fa-check-square-o"></span></span> Cameras fotograficas
                </label>
            @endif
        </div>
        @if(!isset($fullview) || !$fullview)
            <p><a class="btn btn-default btn-lg" href="{{ route('location-view', ['id' => $location->id]) }}" role="button">Mais informacoes</a></p>
        @endif
    </div>
</div>