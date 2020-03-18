@extends('contacts.template')
@section('title', __("main.contact.tag_title"))
@section('page-content')
    <div class="container">
        <ul class="breadcrumb"><li><a href="/">Главная</a></li>
            <li class="active">Контакты</li>
        </ul>
    </div>
    <div class="container site-contact">
        <h1>@lang('main.contact.tag_title')</h1>
        @lang('main.contact.msg1')
        <br>
        <br>
        @php($attributes = ['class'=> 'form-control', 'required'])
        @php($attributes_label = ['class'=> 'control-label'])

        <div class="row">
            <div class="col-lg-5">
                {!! Form::open(['url' => url('/contacts'), 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal']) !!}
                    <div class="form-group field-contactform {{ $errors->has('full_name') ? ' has-error' : '' }}">
                        {{ Form::label('full_name', __('main.contact.fields.full_name.label'), $attributes_label) }}
                        {{ Form::text('full_name', old('full_name'), array_merge($attributes, ['autofocus', 'placeholder' => __('main.contact.fields.full_name.placeholder')])) }}
                        @if ($errors->has('full_name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('full_name') }}</strong>
                        </span>
                        @endif
                    </div>

                <div class="form-group field-contactform {{ $errors->has('email') ? ' has-error' : '' }}">
                    {{ Form::label('email', __('main.contact.fields.email.label'), $attributes_label) }}
                    {{ Form::email('email', old('email'), array_merge($attributes, ['autofocus', 'placeholder' => __('main.contact.fields.email.placeholder')])) }}
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group field-contactform {{ $errors->has('topic') ? ' has-error' : '' }}">
                    {{ Form::label('topic', __('main.contact.fields.topic.label'), $attributes_label) }}
                    {{ Form::text('topic', old('topic'), array_merge($attributes, ['autofocus', 'placeholder' => __('main.contact.fields.topic.placeholder')])) }}
                    @if ($errors->has('topic'))
                        <span class="help-block">
                            <strong>{{ $errors->first('topic') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group field-contactform {{ $errors->has('body') ? ' has-error' : '' }}">
                    {{ Form::label('body', __('main.contact.fields.body.label'), $attributes_label) }}
                    {{ Form::textarea('body', old('body'), array_merge($attributes, ['autofocus', 'placeholder' => __('main.contact.fields.body.placeholder')])) }}
                    @if ($errors->has('body'))
                        <span class="help-block">
                            <strong>{{ $errors->first('body') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                </div>

                    <div class="form-group">
                        {{ Form::submit(__('main.send'), ['class' => 'btn btn-primary btn-wide']) }}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
