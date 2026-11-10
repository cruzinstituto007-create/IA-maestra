<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Catálogo</title>
    <style>
        body { background-color: #f2f2f2; font-family: Arial, sans-serif; margin: 30px; }
        table { width: 100%; border-collapse: collapse; background-color: #fff; margin-bottom: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #0066cc; color: white; }
    </style>
</head>
<body>

    <h1>Ejercicio 1: Catálogo de Productos</h1>

    <?php
    $productos = [
        ["nombre" => "Teclado", "precio" => 30, "stock" => 5],
        ["nombre" => "Raton", "precio" => 15, "stock" => 10],
        ["nombre" => "Monitor", "precio" => 120, "stock" => 3]
    ];

    // Calcular el total del inventario
    function calcularTotal($array_productos) {
        $total = 0;
        foreach ($array_productos as $p) {
            $total = $total + ($p["precio"] * $p["stock"]);
        }
        return $total;
    }
    ?>

    <h2>Lista de Productos</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
        
        <?php
        foreach ($productos as $p) {
            echo "<tr>";
            echo "<td>" . $p["nombre"] . "</td>";
            echo "<td>" . $p["precio"] . " €</td>";
            echo "<td>" . $p["stock"] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2>Valor Total</h2>
    <p>El total del inventario es: 
        <?php 
        $resultado = calcularTotal($productos);
        echo $resultado . " €"; 
        ?>
    </p>

    <br>
    <a href="index.php">Volver al inicio</a>

</body>
</html>