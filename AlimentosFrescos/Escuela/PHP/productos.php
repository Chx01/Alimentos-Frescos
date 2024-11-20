<?php 
$host = 'localhost'; // Cambia esto si tu servidor es diferente   
$dbname = 'Alimentos'; // Cambia por el nombre de tu base de datos   
$username = 'postgres'; // Cambia por tu usuario de base de datos   
$password = 'buama.2003'; // Cambia por tu contraseña de base de datos 

// Crear conexión 
$conn_string = "host=$host dbname=$dbname user=$username password=$password"; 
$conn = pg_connect($conn_string); 

if (!$conn) { 
    die("Conexión fallida: " . pg_last_error()); 
} 

// Verificar si se ha enviado el formulario 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nombre = $_POST['nombre']; 
    $tipo_producto = $_POST['tipo_producto']; 
    $unidad_medida = $_POST['unidad_medida']; 
    $precio_costo = $_POST['precio_costo']; 

    // Preparar la consulta SQL 
    $sql = "INSERT INTO producto (nombre, tipo, unidad_medida, precio_costo) VALUES ($1, $2, $3, $4)"; 
    $result = pg_prepare($conn, "insert_producto", $sql); 
    $result = pg_execute($conn, "insert_producto", array($nombre, $tipo_producto, $unidad_medida, $precio_costo)); 

    if ($result) { 
        echo "Producto agregado exitosamente"; 
    } else { 
        echo "Error: " . pg_last_error($conn); 
    } 
} 

// Cerrar conexión 
pg_close($conn); 
?>

