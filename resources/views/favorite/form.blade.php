<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('recipe_id') }}
            {{ Form::text('recipe_id', $favorite->recipe_id, ['class' => 'form-control' . ($errors->has('recipe_id') ? ' is-invalid' : ''), 'placeholder' => 'Recipe Id']) }}
            {!! $errors->first('recipe_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuarios_id') }}
            {{ Form::text('usuarios_id', $favorite->usuarios_id, ['class' => 'form-control' . ($errors->has('usuarios_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuarios Id']) }}
            {!! $errors->first('usuarios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>