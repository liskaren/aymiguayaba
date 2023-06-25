@extends('layouts.app')

@section('template_title')
    {{ $recipeIngredient->name ?? "{{ __('Show') Recipe Ingredient" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Recipe Ingredient</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recipe-ingredients.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $recipeIngredient->name }}
                        </div>
                        <div class="form-group">
                            <strong>Recipes Id:</strong>
                            {{ $recipeIngredient->recipes_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ingredient Id:</strong>
                            {{ $recipeIngredient->ingredient_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
