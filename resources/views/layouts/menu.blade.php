<ul class="nav navbar-nav navbar-right">
    <li class="dropdown"><a class="dropdown-toggle" href="/" data-toggle="dropdown">Главная <b class="caret"></b></a>
        <ul id="w3" class="dropdown-menu">
            <li><a href="{{ url('/contacts') }}" tabindex="-1">Контакты</a></li>
            <li><a href="{{ url('/rules') }}" tabindex="-1">Правила использования сервиса</a></li>
        </ul>
    </li>
    <li><a href="{{ url('/frauds') }}">Мошенники</a></li>
    <li><a href="{{ url('/frauds/create') }}">Добавить мошенника</a></li>
    <li><a href="{{ url('/advices') }}">Полезные советы</a></li>
    <!-- Authentication Links -->
    <li><a href="{{ url('/register') }}">Регистрация</a></li>
    <li><a href="{{ url('/login') }}">Вход</a></li>
</ul>
