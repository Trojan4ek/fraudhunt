@extends('layouts.app')
@section('title', __("main.index.tag_title"))
@section('content')
        <div class="site-index">
            <div class="padding-top padding-bottom align-center backgound-red">
                <img src="{{ url('images/StopFraud_960x432.png') }}" alt="">        <h2 style="text-align: center;color: white">Всеукраинская база данных информации о мошенниках</h2>
                <a class="btn btn-danger button-big" href="{{ url('/fraud/create') }}">Сообщить о мошеннике</a>        <br/>
            </div>
            <div class="body-content">
                <div class="container">
                    <div class="row padding-top padding-bottom">
                        <div class="col-lg-4 align-center">
                            <a href="{{ url('/advices') }}"><img src="{{ url('images/StopFraudFinger0_600-300x300.png') }}" alt=""></a>
                            <h3>Ответь жулику правильно</h3>
                            <p>Что нельзя делать при звонке с неизвестного номера? Как вести себя при телефонном разговоре с потенциальным жуликом?</p>
                            <p><strong>Ознакомьтесь с основными правилами и советами поведения при телефонном разговоре с неизвестным абонентом!</strong></p>
                            <a class="btn btn-danger button-big" href="{{ url('/advices') }}">Читать правила</a>
                        </div>
                        <div class="col-lg-4 align-center">
                            <a href="{{ url('/frauds') }}"><img src="{{ url('images/StopFraudFinger1_600-300x300.png') }}" alt=""></a>
                            <h3>Пробей мошенника по базе</h3>
                            <p>Собираетесь совершить покупку через Интернет? Потеряли что-либо и теперь вам звонят с предложениями вернуть утрату за деньги?</p>
                            <p><strong> Проверьте базу данных FraudHunt - не станьте жертвой мошенников!</strong></p>
                            <a class="btn btn-danger button-big" href="{{ url('/frauds') }}">Проверить в базе</a>
                        </div>
                        <div class="col-lg-4 align-center">
                            <a href="{{ url('/fraud/create') }}"><img src="{{ url('images/StopFraudFinger3_600-300x300.png') }}" alt=""></a>
                            <h3>Сообщи об аферисте</h3>
                            <p>Чуть не попались на удочку мошенникам? Столкнулись с кибер-аферистами, которые пытались развести вас на деньги?</p>
                            <p><strong>Сделайте доброе дело, сообщите об этом друзьям и знакомым! Помогите им не быть обманутыми аферистами!</strong></p>
                            <a class="btn btn-danger button-big" href="{{ url('/fraud/create') }}">Сообщить о жулике</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
