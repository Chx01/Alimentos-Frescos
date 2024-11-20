<?php 
// Conexión a la base de datos PostgreSQL 
$host = "localhost"; 
$port = "5432"; 
$dbname = "Alimentos"; 
$username = "postgres"; 
$password = "buama.2003"; 

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password");

if (!$conn) { 
    die("Conexión fallida: " . pg_last_error()); 
} 

$sql = "SELECT id_producto, nombre, tipo, unidad_medida, precio_costo FROM producto"; 
$result = pg_query($conn, $sql); 

if ($result) { 
    $productos = pg_fetch_all($result); 
} else { 
    $productos = []; 
} 

pg_close($conn); 
?>