@extends('layouts.app')


@section('content')
    <div class="contanier">
        <h1>Detallaes de pago</h1>

        <div class="card">

            <div class="card-body">
                <h5 class="card-title">
                    <i class="fas fa-heading text-primary"></i> {{ $pay->payment }}
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <i class="fas fa-tag text-info"></i> {{ $pay->creditt_card_number }}
                </h6>

                <p class="card-text">
                    <i class="fas fa-info-circle text-warning"></i> {{ $pay->dates }}
                </p>
            </div>

        </div>

        <div class="mt-3">
            <a href="{{ route('pays,index') }}" class="btn btn-secodary">
                <i class="fas fa-arrow-left"></i> volver
            </a>
        </div>
    </div>







    </div>
