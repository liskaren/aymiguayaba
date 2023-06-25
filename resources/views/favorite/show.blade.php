@extends('layouts.app')

@section('template_title')
    {{ $favorite->name ?? "{{ __('Show') Favorite" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Favorite</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('favorites.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Recipe Id:</strong>
                            {{ $favorite->recipe_id }}
                        </div>
                        <div class="form-group">
                            <strong>Usuarios Id:</strong>
                            {{ $favorite->usuarios_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
