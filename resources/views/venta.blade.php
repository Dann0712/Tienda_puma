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
        <div class="header">VENTA</div>
        <form>
            <label for="id_venta">ID venta:</label>
            <input type="text" id="id_venta" name="id_venta" required>

            <label for="id_cliente">ID Cliente:</label>
            <input type="text" id="id_cliente" name="id_cliente" required>

            <label for="id_vendedor">ID vendedor:</label>
            <input type="text" id="id_vendedor" name="id_vendedor" required>

            <label for="fecha">FECHA:</label>
            <input type="text" id="fecha" name="fecha" required>

            <label for="total">total:</label>
            <input type="text" id="total" name="total" required>

            <label for="subtotal">subtotal:</label>
            <input type="text" id="subtotal" name="subtotal" required>

            <label for="iva">iva:</label>
            <input type="text" id="iva" name="iva" required>

            <label for="tipo_documento">FACTURA/NOTA</label>
            <input type="tipo_documento" id="tipo_documento" name="tipo_documento" required>

            <button type="submit">Agregar</button>
            <button type="button" onclick="window.location.href='/inicio'">Volver</button>
        </form>
    </div>

</body>
</html>
