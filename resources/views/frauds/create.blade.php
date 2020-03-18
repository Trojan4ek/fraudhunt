@extends('layouts.app')
@section('title', __("main.create.tag_title"))
@section('content')
    <div class="container">
        <ul class="breadcrumb"><li><a href="/">Главная</a></li>
            <li><a href="{{ url('/frauds') }}">Мошенники</a></li>
            <li class="active">Добавить мошенника</li>
        </ul>
    </div>
    <div class="container site-contact">
        <section class="content-header">
            <h1>
                @lang('main.create.msg')
            </h1>
        </section>

        @php($attributes = ['class'=> 'form-control',])
        @php($attributes_label = ['class'=> 'control-label'])

        <div class="row">
            <div class="col-lg-5">
                {!! Form::open(['route' => 'frauds.store', 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal']) !!}
                    @include('frauds.fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
