<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda PUMA</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-GLhlTQ8iN17PdL+Pe3m5BOp8D00Y2r0Q8Iw/daQaF5tj2FByEWuBIrY8fCcFHHa" crossorigin="anonymous">
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

    <div class="icon-container">
        <button class="icon-button" onclick="location.href='/cliente'">
            <i class="fas fa-home"></i> CLIENTES
        </button>
        <button class="icon-button" onclick="location.href='/producto'">
            <i class="fas fa-envelope"></i> PRODUCTOS
        </button>
        <button class="icon-button" onclick="location.href='/vendedor'">
            <i class="fas fa-star"></i> VENDEDOR
        </button>
        <button class="icon-button" onclick="location.href='/venta'">
            <i class="fas fa-search"></i> VENTA
        </button>
        <button class="icon-button" onclick="location.href='/detventa'">
            <i class="fas fa-user"></i> DETALLES DE VENTAS
        </button>
        <button class="icon-button" onclick="location.href='/factura'">
            <i class="fas fa-cog"></i> FACTURA
        </button>
        <button class="icon-button" onclick="location.href='/nota'">
            <i class="fas fa-heart"></i> NOTA
        </button>
    </div>

</body>
</html>
