<?php 
// Configuración de la base de datos 
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
    $cantidad_pedido = $_POST['cantidad_pedido']; 
    $precio_pedido = $_POST['precio_pedido']; 
    $estado_pedido = $_POST['estado_pedido']; 

    // Preparar la consulta SQL 
    $sql = "INSERT INTO pedido (cantidad, precio, estado) VALUES ($1, $2, $3)"; 
    $result = pg_prepare($conn, "insert_pedido", $sql); 
    $result = pg_execute($conn, "insert_pedido", array($cantidad_pedido, $precio_pedido, $estado_pedido)); 

    if ($result) { 
        echo "Pedido agregado exitosamente"; 
    } else { 
        echo "Error: " . pg_last_error($conn); 
    } 
} 
 
// Cerrar conexión 
pg_close($conn); 
?>

