<!DOCTYPE html>  
<html lang="es">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Tabla de Pedidos</title>  
    <link rel="stylesheet" href="../CSS/tablapedido.css">  
</head>  
<body>      
    <h2>Lista de Pedidos</h2>  
    <table>  
        <thead>  
            <tr>  
                <th>Identificador</th>  
                <th>Cantidad</th>  
                <th>Precio</th>  
                <th>Estado del Pedido</th>
                <th>Acciones</th>  
            </tr>  
        </thead>  
        <tbody>  
        <?php include_once 'mostrarpedido.php'; ?>  
          
            <?php if ($pedidos): ?>  
                <?php foreach ($pedidos as $pedido): ?>  
                    <tr>  
                        <td><?php echo $pedido['id_pedido']; ?></td>  
                        <td><?php echo $pedido['cantidad']; ?></td>  
                        <td><?php echo '$' . number_format($pedido['precio'], 2); ?></td>  
                        <td><?php echo $pedido['estado']; ?></td>  
                        <td><button class="eliminar" data-id="<?php echo $pedido['id_pedido']; ?>">Eliminar</button></td>  
                    </tr>  
                <?php endforeach; ?>  
            <?php else: ?>  
                <tr>  
                    <td colspan="5">No se encontraron Pedidos.</td>  
                </tr>  
            <?php endif; ?>  
        </tbody>  
    </table>  
    <script src="../JavaScript/jquery-3.7.1.min.js"></script>  
    <script src="../JavaScript/eliminarpedido.js"></script>  
</body>  
</html>

