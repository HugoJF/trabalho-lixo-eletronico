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
                            <input type="text" class="form-control bfh-phone" data-format="(dd) dddd-ddddd" id="exampleInputPassword1" name="phone" placeholder="Telefone">
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