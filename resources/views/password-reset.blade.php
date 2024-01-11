<!-- resources/views/auth/password-reset.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="container">
        <form method="POST" action="{{ route('password.request') }}">
            @csrf

            <!-- Campos de formulario para la recuperación de contraseña -->

            <button type="submit">Enviar enlace de recuperación</button>
        </form>
    </div>

</body>
</html>
