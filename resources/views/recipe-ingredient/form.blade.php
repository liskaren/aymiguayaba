<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $recipeIngredient->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('recipes_id') }}
            {{ Form::text('recipes_id', $recipeIngredient->recipes_id, ['class' => 'form-control' . ($errors->has('recipes_id') ? ' is-invalid' : ''), 'placeholder' => 'Recipes Id']) }}
            {!! $errors->first('recipes_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ingredient_id') }}
            {{ Form::text('ingredient_id', $recipeIngredient->ingredient_id, ['class' => 'form-control' . ($errors->has('ingredient_id') ? ' is-invalid' : ''), 'placeholder' => 'Ingredient Id']) }}
            {!! $errors->first('ingredient_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>