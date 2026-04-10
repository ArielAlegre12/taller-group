@extends('layouts.app')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/tiendaStyle.css') }}">
@endpush
@section('title')
Tienda
@endsection
@section('content')
    <div class="contenedor-categoria">
        <h4>Categoría</h5>
            <div>
                <div>
                    <h5>Aliminentos y Nutrición</h5>
                    <ul>
                        <li>Aliminetos concentrados</li>
                        <li>Snacks y premios</li>
                        <li>suplementos</li>
                    </ul>
                </div>
                <div>
                    <h5>Higene y Cuidado de la Mascota</h5>
                    <li>Champús y acondicionadores</li>
                    <li>Antipulgas y desparasitantes</li>
                    <li>cuidado oral y limpieza</li>
                    <li>Arena para gatos</li>
                </div>
                <div>
                    <h5>Accesorios y Accesorios de Paseo</h5>
                    <li>Correas, collares y pecheras</li>
                    <li>Juguetes</li>
                    <li>Camas y mantas</li>
                    <li>Transportadoras y bolsos</li>
                    <li>Comederos y bebederos</li>
                </div>
                <div>
                    <h5>Productos de Farmacia(Venta Libre)</h5>
                    <li>Collares isabelinos</li>
                    <li>Lociones, perfumes y productos desenrededantes</li>
                    <li>productos de higene general</li>
                </div>
            </div>
    </div>
@endsection