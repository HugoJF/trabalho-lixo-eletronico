<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title', 'Lixo Eletrônico')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="{{ asset('/assets/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/bootstrap-formhelpers.min.css') }}" rel="stylesheet" />


    <link href="{{ asset('/assets/css/gsdk.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/demo.css') }}" rel="stylesheet" />

    <!--     Font Awesome     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

</head>

<body>
<div id="navbar-full">
    <div id="navbar">
        <!--
            navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange
            -->
        <nav class="navbar navbar-ct-blue navbar-ct-darkgreen navbar-transparent navbar-gradient navbar-fixed-top" role="navigation">
            <div class="alert alert-success hidden">
                <div class="container">
                    <b>Lorem ipsum</b> dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                </div>
            </div>

            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">Lixo Eletrônico</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('home') }}">Início</a></li>
                        <li class="dropdown">
                            <a href="#gsdk" class="dropdown-toggle" data-toggle="dropdown">Informações <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('informacoes/baterias') }}">Baterias</a></li>
                                <li><a href="{{ url('informacoes/monitores') }}">Monitores</a></li>
                                <li><a href="{{ url('informacoes/lampadas') }}">Lampadas</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#gsdk" class="dropdown-toggle" data-toggle="dropdown">Locais <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('locais') }}">Lista de locais</a></li>
                                <li><a href="{{ url('locais/submeter') }}">Submeter novo local</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="{{ route('submit-location') }}">Submeter Local</a></li>

                        <li>
                            <a href="javascript:void(0);" data-toggle="search" class="hidden-xs"><i class="fa fa-search"></i></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if(!Auth::check())
                        <li><a href="{{ route('register') }}">Register</a></li>

                        <li>
                            <form action="{{ route('login') }}">
                                <button type="submit" class="btn btn-round btn-default">Sign in</button>
                            </form>
                        </li>
                        @else
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        @endif
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
            @if(isset($small) and $small)
                <div class="blurred-container blurred-container-small">
            @else
                <div class="blurred-container">
            @endif

            <div class="img-src" style="background-image: url('{{ asset('/assets/img/bg.jpg') }}')"></div>
        </div>
    </div><!--  end navbar -->

</div> <!-- end menu-dropdown -->

<div class="main">
    @yield('content')
    <div class="space">
    </div>
    <!-- end container -->
</div>
<!-- end main -->

</body>

<script src="{{ asset('/assets/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>

<script src="{{ asset('/assets/js/bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/bootstrap-formhelpers.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/gsdk-checkbox.js') }}"></script>
<script src="{{ asset('/assets/js/gsdk-radio.js') }}"></script>
<script src="{{ asset('/assets/js/gsdk-bootstrapswitch.js') }}"></script>
<script src="{{ asset('/assets/js/get-shit-done.js') }}"></script>

<script src="{{ asset('/assets/js/custom.js') }}"></script>

</html>