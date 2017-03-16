@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <h1>Informações sobre o projeto</h1>
            <h2>Hospedagem</h2>

            <ul>
                <li><p><a href="http://www.cloudways.com">Cloudways</a> com servidores da <a href="http://www.digitalocean.com">DigitalOcean</a></p></li>
            </ul>

            <h2>Backend Framework</h2>

            <ul>
                <li><p><a href="https://laravel.com/">Laravel 5.4</a> com <a href="https://php.net">PHP 7.0</a> e <a href="https://www.mysql.com/">MySQL 5.6</a></p></li>
                <li><p>Deployment via Git com <a href="">Bitbucket</a></p></li>
            </ul>

            <h2>Frontend Framework</h2>

            <ul>
                <li><p><a href="http://getbootstrap.com/">Twitter Bootstrap</a> com <a href="https://www.creative-tim.com/product/get-shit-done-kit">GSDK</a></p></li>
            </ul>

            <h2>Desenvolvimento</h2>

            <ul>
                <li><p><a href="https://laravel.com/docs/5.4/homestead">Homestead</a> com <a href="https://www.vagrantup.com/">Vagrant</a> e <a href="https://www.virtualbox.org/">VirtualBox</a></p></li>
            </ul>


        </div>
    </div>
@endsection