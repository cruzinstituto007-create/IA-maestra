<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Validador de Registro</title>
    <style>
        body { background-color: #f2f2f2; font-family: Arial, sans-serif; margin: 30px; }
        .caja { background-color: #fff; padding: 20px; border-radius: 5px; width: 400px; margin-bottom: 20px; }
        .error { color: red; }
        .exito { color: green; font-weight: bold; }
        a { color: #0066cc; text-decoration: none; }
    </style>
</head>
<body>

    <h1>Ejercicio 2: Validador de Registro de Usuario</h1>

    <div class="caja">
        <?php
        // Simulamos los datos
        $datosUsuario = [
            "nombre" => "Ana",
            "email" => "ana@correo.com",
            "password" => "123456",
            "edad" => 20
        ];

        // validado los datos con condicionales if
        function validarRegistro($datos) {
            $errores = [];

            //  Que el nombre tenga menos de 3 letras 
            if (strlen($datos["nombre"]) < 3) {
                $errores[] = "El nombre es demasiado corto (mínimo 3 caracteres).";
            }

            // Comprobar el email (si no tiene arroba '@')
            if (strpos($datos["email"], "@") === false) {
                $errores[] = "El email no es válido (falta el @).";
            }

            // Comprobar la contraseña
            if (strlen($datos["password"]) < 6) {
                $errores[] = "La contraseña debe tener al menos 6 caracteres.";
            }

            // Comprobar la edad
            if ($datos["edad"] < 18) {
                $errores[] = "Debes ser mayor de edad (18 años).";
            }

            return $errores;
        }

        $listaErrores = validarRegistro($datosUsuario);

        echo "<h3>Datos a comprobar:</h3>";
        echo "Nombre: " . $datosUsuario["nombre"] . "<br>";
        echo "Email: " . $datosUsuario["email"] . "<br>";
        echo "Edad: " . $datosUsuario["edad"] . "<br><br>";

        // Si el array de errores tiene cosas, las imprimimos con un bucle
        if (count($listaErrores) > 0) {
            echo "<h3 class='error'> El registro ha fallado:</h3>";
            echo "<ul>";
            foreach ($listaErrores as $error) {
                echo "<li class='error'>" . $error . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p class='exito'>¡Registro validado con éxito! Todos los datos son correctos.</p>";
        }
        ?>
    </div>

    <br>
    <a href="index.php">Volver al inicio</a>

</body>
</html>