<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Step Zone</title>
</head>

<body>

    <h1>Step Zone</h1>
    <h2>Iniciar sesión</h2>

    <form action="/login" method="POST">
        @csrf

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <br><br>

        <button type="submit">Ingresar</button>
    </form>
    @if ($errors->any())
        <p style="color: red;">
            {{ $errors->first() }}
        </p>
    @endif

    @if (session('error'))
        <p style="color: red;">
            {{ session('error') }}
        </p>
    @endif

</body>

</html>
