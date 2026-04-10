@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/turnos.css') }}">
@endpush
@section('title')
    Servicios de turnos
@endsection
@section('content')
    <div class="header-turno">
        <div class="container">
            <h1 class="text-center">Servicios de turnos</h1>
        </div>
    </div>
    <div class="container mt-5">
        <div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
            <div class="row text-center">
                <div class="col-md-6 mb-4">
                    <button class="btn btn-outline-success custom-btn">
                        <img src="{{ asset('images/caballo.png') }}" alt="caballo-cabeza">
                        <p>Animales > 100kg</p>
                    </button>
                </div>
                <div class="col-md-6 mb-4">
                    <button class="btn btn-outline-success custom-btn">
                        <img src="{{ asset('images/gato.png') }}" alt="gato-cabeza">
                        <p>Animales < 100kg</p>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection