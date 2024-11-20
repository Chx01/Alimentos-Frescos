<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Clientes</title>
    <link rel="stylesheet" href="../CSS/tablaClientes.css">
</head>
<body>    
    <h2>Lista de Clientes</h2>
    <table>
        <thead>
            <tr>
                <th>Tipo de Cliente</th>
                <th>Nombre del Cliente</th>
                <th>Carnet de Identidad</th>
                <th>Teléfono</th> 
                <th>Acciones</th>              
            </tr>
        </thead>
        <tbody>
        <?php include_once 'mostrarClientes.php'; ?>        
            <?php if ($clientes): ?>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?php echo $cliente['tipo']; ?></td>
                        <td><?php echo $cliente['nombre']; ?></td>
                        <td><?php echo $cliente['carnet']; ?></td>  <!-- Ajusta 'tipo' al nombre de tu columna -->
                        <td><?php echo $cliente['telefono']; ?></td> <!-- Ajusta 'unidad_medida' al nombre de tu columna -->                        
                        <td><button class="eliminar" data-id="<?php echo $cliente['carnet']; ?>">Eliminar</button> 
                        <button class="modificar" data-id="<?php echo $cliente['carnet']; ?>">Modificar</button></td>
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
    <script src="../JavaScript/eliminarCliente.js"></script>
</body>
</html>