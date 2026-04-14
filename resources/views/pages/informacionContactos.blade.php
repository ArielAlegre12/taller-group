@extends('layouts.app')

@section('title')
    Comercialización
@endsection

@section('content')

<h2>Información de Contacto</h2>

<p><strong>Razón social:</strong> Huellas Felices S.A.</p>
<p><strong>Dirección:</strong> Hipólito Yrigoyen 1845, W3400ATN W3400ATN, Corrientes</p>
<p><strong>Teléfono:</strong>+54 3791324321</p>
<p><strong>Email:</strong>huellasFelicesShop@gmail.com</p>
<p><strong>Horario:</strong> Lunes a Sábado de 9:00 a 18:00</p>

<h4>Envíanos un mensaje</h4>

<form>
    <input type="text" placeholder="Nombre" class="form-control mb-2">
    <input type="email" placeholder="Email" class="form-control mb-2">
    <textarea placeholder="Mensaje" class="form-control mb-2"></textarea>
    <button class="btn btn-success">Enviar</button>
</form>

@endsection