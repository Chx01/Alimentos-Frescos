<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Tabla de Proveedores</title> 
    <link rel="stylesheet" href="../CSS/tablaproveedores.css"> 
</head> 
<body>     
    <h2>Lista de Proveedores</h2> 
    <table> 
        <thead> 
            <tr> 
                <th>Identificador</th> 
                <th>Nombre del Proveedor</th> 
                <th>Teléfono</th> 
                <th>Dirección</th> 
                <th>Acciones</th>
            </tr> 
        </thead> 
        <tbody> 
        <?php include_once 'mostrarProveedores.php'; ?>         
            <?php if ($proveedores): ?> 
                <?php foreach ($proveedores as $proveedor): ?> 
                    <tr> 
                        <td><?php echo $proveedor['id_proveedor']; ?></td>
                        <td><?php echo $proveedor['nombre']; ?></td> 
                        <td><?php echo $proveedor['telefono']; ?></td>  
                        <td><?php echo $proveedor['direccion']; ?></td>                         
                        <td><button class="eliminar" data-id="<?php echo $proveedor['id_proveedor']; ?>" > Eliminar </button></td> 
                    </tr> 
                <?php endforeach; ?> 
            <?php else: ?> 
                <tr> 
                    <td colspan="4">No se encontraron proveedores.</td> 
                </tr> 
            <?php endif; ?> 
        </tbody> 
    </table> 
    <script src="../JavaScript/jquery-3.7.1.min.js"></script> 
    <script src="../JavaScript/eliminarProveedor.js"></script> 
</body> 
</html>

