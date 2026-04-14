@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/tiendaStyle.css') }}">
@endpush

@section('title')
    Tienda
@endsection

@section('h1')
    Tienda
@endsection

@section('content')

    <div class="tienda-container">

        <!--SIDEBAR-->
        <aside class="sidebar">
            <h4>Categorías</h4>
            <ul>
                <li data-categoria="todos" class="activo">Todos</li>
                <li data-categoria="alimentos">Alimentos</li>
                <li data-categoria="higiene">Higiene</li>
                <li data-categoria="accesorios">Accesorios</li>
                <li data-categoria="salud">Salud</li>
            </ul>
        </aside>

        <!--PRODUCTOS-->
        <main class="productos" id="contenedor-productos">

            <div class="card-producto" data-categoria="alimentos">
                <img
                    src="https://puppis.vtexassets.com/arquivos/ids/189030-1600-1600?v=637965320413700000&width=1600&height=1600&aspect=true">
                <p>Alimento Old Prince Premium Raza Mediana - 20 Kg</p>
                <p><strong>$3500</strong></p>
                <div class="cantidad">
                    <button>-</button>
                    <span class="numero">1</span>
                    <button>+</button>
                </div>
                <button>Agregar</button>
            </div>

            <div class="card-producto" data-categoria="higiene">
                <img
                    src="https://puppis.vtexassets.com/arquivos/ids/158352-500-auto?v=635991063099030000&width=500&height=auto&aspect=true">
                <p>Shampoo Perro Porta Cachorro Hipoalergenico</p>
                <p><strong>$2200</strong></p>
                <div class="cantidad">
                    <button>-</button>
                    <span class="numero">1</span>
                    <button>+</button>
                </div>
                <button>Agregar</button>
            </div>

            <div class="card-producto" data-categoria="alimentos">
                <img
                    src="https://puppis.vtexassets.com/arquivos/ids/189017-500-auto?v=637965304397000000&width=500&height=auto&aspect=true">
                <p>Snack Moisty Cream Zootec Sabor Pollo x5 Uds</p>
                <p><strong>$900</strong></p>
                <div class="cantidad">
                    <button>-</button>
                    <span class="numero">1</span>
                    <button>+</button>
                </div>
                <button>Agregar</button>
            </div>

            <div class="card-producto" data-categoria="salud">
                <img
                    src="https://puppis.vtexassets.com/arquivos/ids/188676-500-auto?v=637951316267300000&width=500&height=auto&aspect=true">
                <p>Antiparasitario Simparica 120 Mg - Simparica 40-60 Kg</p>
                <p><strong>$1000</strong></p>
                <div class="cantidad">
                    <button>-</button>
                    <span class="numero">1</span>
                    <button>+</button>
                </div>
                <button>Agregar</button>
            </div>

            <div class="card-producto" data-categoria="accesorios">
                <img
                    src="https://puppis.vtexassets.com/arquivos/ids/201343-1600-1600?v=638888853453230000&width=1600&height=1600&aspect=true">
                <p>Collar Zeedog Neopro Amazonia - Zeedog 31x1,5 cm</p>
                <p><strong>$300</strong></p>
                <div class="cantidad">
                    <button>-</button>
                    <span class="numero">1</span>
                    <button>+</button>
                </div>
                <button>Agregar</button>
            </div>

        </main>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/tiendaMain.js') }}"></script>
@endpush