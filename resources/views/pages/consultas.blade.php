@extends('layouts.app')

@section('title')
    Consultas
@endsection

@section('content')
    @section('h1')
        Consultas
    @endsection


    <select class="form-control mb-2">
        <option>Consulta general</option>
        <option>Turno veterinario</option>
        <option>Compra de productos</option>
    </select>
@endsection