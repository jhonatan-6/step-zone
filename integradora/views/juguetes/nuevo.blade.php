@extends('layouts.base')

@section('title', 'Jugueteria El Trompo')

@section('content')

    <h1>Registrar juguete</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/juguetes/nuevo" method="POST">

        @csrf

        <label for="nombre">Nombre del juguete:</label>
        <input type="text" id="nombre" name="nombre">

        <br><br>

        <label for="precio">Precio en Bs:</label>
        <input type="number" id="precio" name="precio">

        <br><br>

        <button type="submit">Registrar juguete</button>

    </form>

@endsection