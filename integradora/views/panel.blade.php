
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel - Step Zone</title>
</head>
<body>

    <h1>Step Zone - Panel de administración</h1>

    <p>¡Bienvenido! Has iniciado sesión correctamente.</p>

    <h2>Productos</h2>

    @if(isset($productos) && $productos->count() > 0)
        <ul>
            @foreach($productos as $producto)
                <li>
                    {{ $producto->nombre }}
                    - {{ $producto->precio }} Bs.
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay productos registrados.</p>
    @endif

    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>

</body>
</html>
