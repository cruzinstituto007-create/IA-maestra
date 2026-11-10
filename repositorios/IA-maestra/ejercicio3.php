<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Carrito de Compras</title>
    <style>
        body { background-color: #f2f2f2; font-family: Arial, sans-serif; margin: 30px; }
        .caja { background-color: #fff; padding: 20px; border-radius: 5px; width: 500px; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; margin-bottom: 15px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #0066cc; color: white; }
        .total { font-weight: bold; color: #333; }
        a { color: #0066cc; text-decoration: none; }
    </style>
</head>
<body>

    <h1>Ejercicio 3: Simulador de Carrito de Compras</h1>

    <div class="caja">
        <?php
        // Productos del carrito 
        $carrito = [
            ["nombre" => "Teclado", "precio" => 30, "cantidad" => 2],
            ["nombre" => "Ratón", "precio" => 15, "cantidad" => 1],
            ["nombre" => "Auriculares", "precio" => 25, "cantidad" => 3]
        ];

        // Calculo el ticket y aplico el descuento si es necesario 
        function procesarCarrito($items) {
            $subtotalGeneral = 0;

            foreach ($items as $producto) {
                $subtotalGeneral = $subtotalGeneral + ($producto["precio"] * $producto["cantidad"]);
            }

            // Aplico un 10% de descuento si el total supera los 100€
            $descuento = 0;
            if ($subtotalGeneral > 100) {
                $descuento = $subtotalGeneral * 0.10; // 10% de descuento
            }

            $totalFinal = $subtotalGeneral - $descuento;

            return [
                "subtotal" => $subtotalGeneral,
                "descuento" => $descuento,
                "total" => $totalFinal
            ];
        }
        ?>

        <h3>Detalle de la Compra:</h3>
        <table>
            <tr>
                <th>Producto</th>
                <th>Precio U.</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
            <?php
            foreach ($carrito as $item) {
                $subtotalLinea = $item["precio"] * $item["cantidad"];
                echo "<tr>";
                echo "<td>" . $item["nombre"] . "</td>";
                echo "<td>" . $item["precio"] . " €</td>";
                echo "<td>" . $item["cantidad"] . "</td>";
                echo "<td>" . $subtotalLinea . " €</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <?php
        // Ejecutamos la función para obtener los totales
        $resultadoCompra = procesarCarrito($carrito);
        ?>

        <p>Subtotal: <?php echo $resultadoCompra["subtotal"]; ?> €</p>
        
        <?php if ($resultadoCompra["descuento"] > 0): ?>
            <p style="color: green;">Descuento aplicado (10%): -<?php echo $resultadoCompra["descuento"]; ?> €</p>
        <?php else: ?>
            <p style="color: gray;">Sin descuento (gasta más de 100€ para conseguir un 10%)</p>
        <?php endif; ?>

        <p class="total">Precio Total a Pagar: <?php echo $resultadoCompra["total"]; ?> €</p>
    </div>

    <br>
    <a href="index.php">Volver al inicio</a>

</body>
</html>