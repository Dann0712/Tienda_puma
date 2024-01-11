<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 85vh;
            margin: 10;
            padding: 50;
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif; /* Cambia la fuente según sea necesario */
        }

        .navbar {
            width: 100%;
            background-color: #3498db;
            padding: 25px 0;
            text-align: center;
            color: #fff;
            box-shadow: 0 7px 6px rgba(0, 0, 0, 0.1);
        }

        .icon-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 70%;
        }

        .icon-button {
            font-size: 1.5em; /* Ajusta según sea necesario */
            color: #3498db;
            text-align: center;
            margin: 10px;
            width: 45%;
            box-sizing: border-box;
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border: 1px solid #3498db;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .icon-button i {
            margin-right: 5px; /* Espacio entre el icono y el texto */
        }

        .icon-button:hover {
            background-color: #3498db;
            color: #fff;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 2em; /* Ajusta según sea necesario */
            margin-bottom: 20px;
        }

        @media screen and (max-width: 768px) {
            .icon-button {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <div class="navbar">
        <h1>TIENDA "PUMA"</h1>
    </div>
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar sesión</button>
        </form>
    </div>

</body>
</html>
