<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Tabla de Compras</title> 
    <link rel="stylesheet" href="../CSS/tablacompra.css"> 
</head> 
<body>     
    <h2>Lista de Compras</h2> 
    <table> 
        <thead> 
            <tr> 
                <th>Identificador</th>
                <th>Fecha de Compra</th> 
                <th>Cantidad</th> 
                <th>Precio</th> 
                <th>Acciones</th>
            </tr> 
        </thead> 
        <tbody> 
        <?php include_once 'mostrarcompra.php'; ?> 
            <?php if ($compras): ?> 
                <?php foreach ($compras as $compra): ?> 
                    <tr> 
                        <td><?php echo $compra['id_fecha']; ?></td> 
                        <td><?php echo $compra['fecha']; ?></td> 
                        <td><?php echo $compra['cant']; ?></td> 
                        <td><?php echo '$' . $compra['precio']; ?></td> 
                        <td><button class="eliminar" data-id="<?php echo $compra['id_fecha']; ?>">Eliminar</button> 
                        <button class="modificar" data-id="<?php echo $cliente['id_fecha']; ?>">Modificar</button></td>
                    </tr> 
                <?php endforeach; ?> 
            <?php else: ?> 
                <tr> 
                    <td colspan="3">No se encontraron compras.</td> 
                </tr> 
            <?php endif; ?> 
        </tbody> 
    </table> 
    </form> 
    
    <script src="../JavaScript/jquery-3.7.1.min.js"></script> 
    <script src="../JavaScript/eliminarcompra.js"></script> 
</body> 
</html>