
@extends('layouts.base')

@section('title', 'Jugueteria El Trompo')

@section('content')
    <h1>Jugueteria El Trompo</h1>

    <p>
        Bienvenidos a nuestra juguetería, donde encontrarás juguetes
        para compartir momentos divertidos y especiales.
    </p>

    <p>Total de juguetes registrados: {{ count($juguetes) }}</p>

    @foreach ($juguetes as $juguete)
        <div>
            <h3>{{ $juguete->nombre }}</h3>
            <p>Precio: Bs {{ $juguete->precio }}</p>
            <p>Stock: {{ $juguete->stock }}</p>
        </div>
    @endforeach

    <p>Estante atendido por Jhonatan Pastor Quispe Samo</p>

    <a href="/juguetes/nuevo">Registrar nuevo juguete</a>
@endsection
