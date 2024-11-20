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

// Consulta para obtener los proveedores  
$sql = "SELECT id_proveedor, nombre, telefono, direccion FROM proveedor";  
$result = pg_query($conn, $sql);  

if ($result) {  
    $proveedores = pg_fetch_all($result);  
} else {  
    $proveedores = [];  
}  
 
pg_close($conn);  
?>

