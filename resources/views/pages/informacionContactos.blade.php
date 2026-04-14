@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/infoContactoStyle.css') }}">
@endpush

@section('title')
    Comercialización
@endsection

@section('h1')
    Información de Contacto
@endsection

@section('content')

    <div class="container my-4">
        <div class="row g-4">
            <!--info-->
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm p-3 h-100">
                    <p><strong>Razón social:</strong> Huellas Felices S.A.</p>
                    <p><strong>Dirección:</strong> Hipólito Yrigoyen 1845, Corrientes.</p>
                    <p><strong>Teléfono:</strong> +54 3791323421</p>
                    <p><strong>Email:</strong> huellasFelicesShop@gmail.com</p>
                    <p><strong>Horario:</strong> Lunes a Sábado de 09:00 a 18:00</p>

                    <h4 class="mt-3">Envíanos un mensaje</h4>

                    <form>
                        <label class="form-label">Nombre</label>
                        <input type="text" placeholder="Ingrese su nombre" class="form-control mb-2">

                        <label class="form-label">Email</label>
                        <input type="email" placeholder="Ingrese su correo" class="form-control mb-2">

                        <label class="form-label">Mensaje</label>
                        <textarea placeholder="Escriba su mensaje" class="form-control mb-2"></textarea>

                        <button class="btn btn-success w-100">Enviar</button>
                    </form>
                </div>
            </div>


            <!--mapa-->
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm h-100">
                    <iframe class="w-100 h-100 rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.993828401266!2d-58.827591700000006!3d-27.4694515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456b5f95f3b461%3A0x4d64f895c881715e!2sHip%C3%B3lito%20Yrigoyen%201845%2C%20W3400ATN%20Corrientes!5e0!3m2!1ses-419!2sar!4v1776186608335!5m2!1ses-419!2sar"
                        style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

@endsection