@extends('layouts.app')


@section('content')

    <div class="row">
        <br>
        <br>
        <br>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Submeter novo local de reciclagem de lixo eletronico</div>
                <div class="panel-body">
                    <form action="{{ route('submit-location') }}" method="POST">
                        {{ csrf_field() }}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do Local</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Estado</label>
                            <select type="text" class="form-control bfh-states" data-country="BR" id="exampleInputPassword1" name="state" placeholder="Estado"></select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Cidade</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="city" placeholder="Cidade">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Endereco</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="address" placeholder="Endereco">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Telefone</label>
                            <input type="text" class="form-control bfh-phone" data-format="dd dddd-ddddd" id="exampleInputPassword1" name="phone" placeholder="Telefone">
                            <!-- http://www.jasny.net/bootstrap/javascript/ -->
                        </div>
                        <div class="form-group">
                            <label>O que coletam?</label>
                            <label class="checkbox" for="monitores-televisores-lcd">
                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span>
                                <input id="monitores-televisores-lcd-checkbox" value="1" type="checkbox" name="monitores-televisores-lcd" data-toggle="checkbox"> Monitores e televisores LCD
                            </label>
                            <label class="checkbox" for="monitores-televisores-crt">
                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span>
                                <input id="monitores-televisores-crt-checkbox" value="1" type="checkbox" name="monitores-televisores-crt" data-toggle="checkbox"> Monitores e televisores CRT
                            </label>
                            <label class="checkbox" for="lampadas">
                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span>
                                <input id="lampadas-checkbox" value="1" type="checkbox" name="lampadas" data-toggle="checkbox"> Lampadas
                            </label>
                            <label class="checkbox" for="pilhas-baterias">
                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span>
                                <input id="pilhas-baterias-checkbox" value="1" type="checkbox" name="pilhas-baterias" data-toggle="checkbox"> Pilhas e baterias
                            </label>
                            <label class="checkbox" for="toners">
                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span>
                                <input id="toners-checkbox" value="1" type="checkbox" name="toners" data-toggle="checkbox"> Toners
                            </label>
                            <label class="checkbox" for="impressoras">
                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span>
                                <input id="impressoras-checkbox" value="1" type="checkbox" name="impressoras" data-toggle="checkbox"> Impressoras
                            </label>
                            <label class="checkbox" for="computadores">
                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span>
                                <input id="computadores-checkbox" value="1" type="checkbox" name="computadores" data-toggle="checkbox"> Computadores
                            </label>
                            <label class="checkbox" for="celulares">
                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span>
                                <input id="celulares-checkbox" value="1" type="checkbox" name="celulares" data-toggle="checkbox"> Celulares
                            </label>
                            <label class="checkbox" for="cameras-fotograficas">
                                <span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span>
                                <input id="cameras-fotograficas-checkbox" value="1" type="checkbox" name="cameras-fotograficas" data-toggle="checkbox"> Cameras fotograficas
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Descricao</label>
                            <textarea rows="5" class="form-control" id="exampleInputPassword1" name="description" placeholder="Descricao"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection