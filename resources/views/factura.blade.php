<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <!-- Agrega cualquier otra hoja de estilo necesario -->

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 80%;
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .header {
            text-align: center;
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        form {
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 18px;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 49%;
        }

        button:hover {
            background-color: #267bb8;
        }

        /* Agregamos un margen inferior al segundo botón */
        button:last-child {
            margin-bottom: 10px;
        }

        @media screen and (max-width: 768px) {
            .container {
                width: 90%;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">FACTURA</div>
        <form>
            <label for="id_cliente">ID FACTURA:</label>
            <input type="text" id="id_cliente" name="id_cliente" required>

            <label for="nombre">Id VENTA</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="tarjeta_membresia">Total:</label>
            <input type="text" id="tarjeta_membresia" name="tarjeta_membresia" required>

            <label for="saldo">Saldo:</label>
            <input type="text" id="saldo" name="saldo" required>

            <button type="submit">Agregar</button>
            <button type="button" onclick="window.location.href='/inicio'">Volver</button>
        </form>
    </div>

</body>
</html>
