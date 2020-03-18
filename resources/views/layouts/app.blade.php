<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('css/site.css') }}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('images/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('images/favicon-16x16.png') }}">
    @yield('css')

</head>

<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/"><img src="{{ url('images/FraudHunt_Logo_160x55_5.png') }}" width="25" alt=""></a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">FRAUDHUNT</a></li>
                </ul>
                <!-- Right Side Of Navbar -->
                @include('layouts.menu')
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="align-center padding-bottom">
            <p>
                Размещая или используя информацию в базе данных "FraudHunt" вы подтверждаете своё согласие с <a href="{{ url('/rules') }}">Правилами использования сервиса</a>. Все права защищены. Любое копирование, публикация, перепечатка материалов сайта разрешается при условии наличия прямой индексируемой гиперссылки на "Всеукраинская база данных информации о мошенниках «Fraud Hunt»".
            </p>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left">&copy; Klevrit 2020</p>
                <p class="pull-right">Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a></p>
            </div>
        </div>
    </div>

    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/bootstrap.js') }}"></script>
    <script src="{{ url('js/yii.js') }}"></script>
    @stack('scripts')

</body>
</html>
