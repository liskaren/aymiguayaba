@extends('layouts,app')

@section('content')
<div class="contanier">
    <h1>Pagos </h1>

    @if (section(success))
    <div class="alert alert-primary">
        <i class="fas fa-check-circle text-primary"></i> {{session('success')}}
    </div>

    @elseif (session('message'))
    <div class="alert alert-success">
        <i class="fas fa-check-circle text-success"></i> {{session('message')}}
    </div>

    @elseif (session('alert'))
    








