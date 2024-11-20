<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Productos</title>
    <link rel="stylesheet" href="../CSS/tablaproducto.css">
</head>
<body>    
    <h2>Lista de Productos</h2>
    <table>
        <thead>
            <tr>
                <th>Identificador</th>
                <th>Nombre del Producto</th>
                <th>Tipo de Producto</th>
                <th>Unidad de Medida</th>
                <th>Precio de Costo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php include_once 'mostrarProductos.php'; ?>
        
            <?php if ($productos): ?>
                <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?php echo $producto['id_producto']; ?></td>
                        <td><?php echo $producto['nombre']; ?></td>
                        <td><?php echo $producto['tipo']; ?></td>  <!-- Ajusta 'tipo' al nombre de tu columna -->
                        <td><?php echo $producto['unidad_medida']; ?></td> <!-- Ajusta 'unidad_medida' al nombre de tu columna -->
                        <td><?php echo '$' . $producto['precio_costo']; ?></td> <!-- Ajusta 'precio_costo' al nombre de tu columna -->
                        <td><button class="eliminar" data-id="<?php echo $producto['id_producto']; ?>">Eliminar</button></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No se encontraron productos.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <script src="../JavaScript/jquery-3.7.1.min.js"></script>
    <script src="../JavaScript/conextion.js"></script>
</body>
</html>