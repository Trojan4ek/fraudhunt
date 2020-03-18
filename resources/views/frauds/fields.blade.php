<div class="form-group field-contactform {{ $errors->has('f_name') ? ' has-error' : '' }}">
    {{ Form::label('f_name', __('main.create.fields.f_name.label'), $attributes_label) }}
    {{ Form::text('f_name', old('f_name'), array_merge($attributes, ['autofocus', 'placeholder' => __('main.create.fields.f_name.placeholder')])) }}
    @if ($errors->has('f_name'))
        <span class="help-block">
            <strong>{{ $errors->first('f_name') }}</strong>
        </span>
    @endif
</div>

<div class="form-group field-contactform {{ $errors->has('description') ? ' has-error' : '' }}">
    {{ Form::label('description', __('main.create.fields.description.label'), $attributes_label) }}
    {{ Form::textarea('description', old('description'), array_merge($attributes, ['autofocus', 'placeholder' => __('main.create.fields.description.placeholder')])) }}
    @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
</div>

<div class="form-group field-contactform {{ $errors->has('phone1') ? ' has-error' : '' }}">
    {{ Form::label('phone1', __('main.create.fields.phone1.label'), $attributes_label) }}
    {{ Form::number('phone1', old('topic'), array_merge($attributes, ['autofocus', 'placeholder' => __('main.create.fields.phone1.placeholder')])) }}
    @if ($errors->has('phone1'))
        <span class="help-block">
            <strong>{{ $errors->first('phone1') }}</strong>
        </span>
    @endif
</div>

<div class="form-group field-contactform {{ $errors->has('phone2') ? ' has-error' : '' }}">
    {{ Form::label('phone2', __('main.create.fields.phone2.label'), $attributes_label) }}
    {{ Form::number('phone2', old('topic'), array_merge($attributes, ['autofocus', 'placeholder' => __('main.create.fields.phone2.placeholder')])) }}
    @if ($errors->has('phone2'))
        <span class="help-block">
            <strong>{{ $errors->first('phone2') }}</strong>
        </span>
    @endif
</div>

<div class="form-group field-contactform {{ $errors->has('card1') ? ' has-error' : '' }}">
    {{ Form::label('card1', __('main.create.fields.card1.label'), $attributes_label) }}
    {{ Form::number('card1', old('topic'), array_merge($attributes, ['autofocus', 'placeholder' => __('main.create.fields.card1.placeholder')])) }}
    @if ($errors->has('card1'))
        <span class="help-block">
            <strong>{{ $errors->first('card1') }}</strong>
        </span>
    @endif
</div>


<div class="form-group">
    {{ Form::submit(__('main.send'), ['class' => 'btn btn-primary btn-wide']) }}
</div>

