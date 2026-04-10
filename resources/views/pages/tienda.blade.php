@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/tiendaStyle.css') }}">
@endpush
@section('title')
    Tienda
@endsection
@section('content')
    <div class="tienda-container">

        <!--SIDEBAR-->
        <aside class="sidebar">
            <h4>Categorías</h4>
            <ul>
                <li onclick="filtrar('todos', this)" class="activo">Todos</li>
                <li onclick="filtrar('alimentos', this)">Alimentos</li>
                <li onclick="filtrar('higiene', this)">Higiene</li>
                <li onclick="filtrar('accesorios', this)">Accesorios</li>
                <li onclick="filtrar('salud', this)">Salud</li>
            </ul>
        </aside>

        <!--PRODUCTOS-->
        <main class="productos" id="contenedor-productos">

            <div class="card-producto" data-categoria="alimento">
                <img src="https://via.placeholder.com/150">
                <h6>Alimento para perro</h6>
                <p>$3500</p>
                <button>Agregar</button>
            </div>

            <div class="card-producto" data-categoria ="higiene">
                <img src="https://via.placeholder.com/150">
                <h6>Shampoo antipulgas</h6>
                <p>$2200</p>
                <button>Agregar</button>
            </div>

            <div class="card-producto" data-categoria="accesorios">
                <img src="https://via.placeholder.com/150">
                <h6>Snack para gato</h6>
                <p>$900</p>
                <button>Agregar</button>
            </div>

            <div class="card-producto" data-categoria="salud">
                <img src="https://via.placeholder.com/150">
                <h6>Antiparasitario de Amplio Espectro</h6>
                <p>$1000</p>
                <button>Agregar</button>
            </div>

        </main>
    </div>
@endsection