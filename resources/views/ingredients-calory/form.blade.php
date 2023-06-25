<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('worth') }}
            {{ Form::text('worth', $ingredientsCalory->worth, ['class' => 'form-control' . ($errors->has('worth') ? ' is-invalid' : ''), 'placeholder' => 'Worth']) }}
            {!! $errors->first('worth', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ingredients_id') }}
            {{ Form::text('ingredients_id', $ingredientsCalory->ingredients_id, ['class' => 'form-control' . ($errors->has('ingredients_id') ? ' is-invalid' : ''), 'placeholder' => 'Ingredients Id']) }}
            {!! $errors->first('ingredients_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>