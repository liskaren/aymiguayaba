@extends('layouts.app')

@section('template_title')
    {{ $recipe->name ?? "{{ __('Show') Recipe" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Recipe</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('recipes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $recipe->name }}
                        </div>
                        <div class="form-group">
                            <strong>Calories:</strong>
                            {{ $recipe->calories }}
                        </div>
                        <div class="form-group">
                            <strong>Amount:</strong>
                            {{ $recipe->amount }}
                        </div>
                        <div class="form-group">
                            <strong>Units:</strong>
                            {{ $recipe->units }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
