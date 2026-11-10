<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Estadísticas de Notas</title>
    <style>
        body { background-color: #f2f2f2; font-family: Arial, sans-serif; margin: 30px; }
        .caja { background-color: #fff; padding: 20px; border-radius: 5px; width: 450px; margin-bottom: 20px; }
        .aprobado { color: green; font-weight: bold; }
        .suspenso { color: red; font-weight: bold; }
        a { color: #0066cc; text-decoration: none; }
    </style>
</head>
<body>

    <h1>Ejercicio 4: Generador de Estadísticas de Notas</h1>

    <div class="caja">
        <?php
        $notas = [6.5, 4.0, 8.5, 3.2, 9.0, 5.0, 7.5, 4.8, 10.0];

        // calculo la nota media 
        function calcularMedia($listaNotas) {
            $suma = 0;
            $cantidad = count($listaNotas); 
            
            foreach ($listaNotas as $nota) {
                $suma = $suma + $nota; 
            }

            if ($cantidad > 0) {
                return $suma / $cantidad; 
            } else {
                return 0;
            }
        }

        //  función básica para contar aprobados y suspensos
        function contarAprobadosSuspensos($listaNotas) {
            $aprobados = 0;
            $suspensos = 0;

            foreach ($listaNotas as $nota) {
                if ($nota >= 5) {
                    $aprobados++; 
                } else {
                    $suspensos++; 
                }
            }

            return [
                "aprobados" => $aprobados,
                "suspensos" => $suspensos
            ];
        }

        $mediaFinal = calcularMedia($notas);
        $conteo = contarAprobadosSuspensos($notas);
        ?>

        <h3>Lista de Notas en Clase:</h3>
        <p>
            <?php 
            foreach ($notas as $n) {
                echo $n . " | ";
            }
            ?>
        </p>

        <hr>

        <h3>Resultados Estadísticos:</h3>
        <p><strong>Nota Media de la clase:</strong> <?php echo round($mediaFinal, 2); ?> puntos</p>
        <p>Total de alumnos aprobados (>= 5): <span class="aprobado"><?php echo $conteo["aprobados"]; ?></span></p>
        <p>Total de alumnos suspensos (< 5): <span class="suspenso"><?php echo $conteo["suspensos"]; ?></span></p>
    </div>

    <br>
    <a href="index.php">Volver al inicio</a>

</body>
</html>