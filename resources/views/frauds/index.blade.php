@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="breadcrumb"><li><a href="/">Главная</a></li>
        <li class="active">Мошенники</li>
    </ul>
</div>
<div class="container fraud-index">
    <h1>Сейчас в базе 586 записи(ей) о мошенниках</h1>
    <div class="row">
        <div class="col-lg-3">
            <div class="fraud-search">
{{--                <form id="w0" action="{{ url('/frauds') }}" method="get">--}}
{{--                    <div class="form-group field-fraudsearch-phone">--}}
{{--                        <label class="control-label" for="fraudsearch-phone">Для поиска введите полный номер телефона (10 цифр начиная с "0")</label>--}}
{{--                            <input type="text" id="fraudsearch-phone" class="form-control" name="FraudSearch[phone]" maxlength="10" placeholder="0930000000">--}}
{{--                        <div class="help-block"></div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <button type="submit" class="btn btn-primary">Поиск</button><button type="reset" class="btn btn-default">Сброс</button>--}}
{{--                    </div>--}}
{{--                </form>--}}

            </div>
        </div>
    </div>
</div>

@endsection

