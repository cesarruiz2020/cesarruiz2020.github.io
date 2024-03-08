<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Exitoso</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registro Exitoso</h2>
        <?php
        // Recuperar los valores del formulario utilizando $_POST
        $nombre = $_POST['nombre'];
        $apellido_paterno = $_POST['apellido_paterno'];
        $apellido_materno = $_POST['apellido_materno'];
        $nombre_usuario = $_POST['nombre_usuario'];
        $contrasena = $_POST['contrasena'];
        $email = $_POST['email'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $rfc = $_POST['rfc'];
        $calle = $_POST['calle'];
        $colonia = $_POST['colonia'];
        $numero_casa = $_POST['numero_casa'];
        $cp = $_POST['cp'];

        // Imprimir los valores del formulario
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Apellido Paterno:</strong> $apellido_paterno</p>";
        echo "<p><strong>Apellido Materno:</strong> $apellido_materno</p>";
        echo "<p><strong>Nombre de Usuario:</strong> $nombre_usuario</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Fecha de Nacimiento:</strong> $fecha_nacimiento</p>";
        echo "<p><strong>RFC:</strong> $rfc</p>";
        echo "<p><strong>Calle:</strong> $calle</p>";
        echo "<p><strong>Colonia:</strong> $colonia</p>";
        echo "<p><strong>Número de Casa:</strong> $numero_casa</p>";
        echo "<p><strong>Código Postal:</strong> $cp</p>";
        ?>
    </div>
</body>
</html>
