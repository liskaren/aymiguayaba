@extends('layouts.app')

@section('template_title')
    {{ $ingredientsCalory->name ?? "{{ __('Show') Ingredients Calory" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ingredients Calory</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingredients-calories.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Worth:</strong>
                            {{ $ingredientsCalory->worth }}
                        </div>
                        <div class="form-group">
                            <strong>Ingredients Id:</strong>
                            {{ $ingredientsCalory->ingredients_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
