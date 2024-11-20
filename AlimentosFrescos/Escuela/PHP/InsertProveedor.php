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
    $nombre_proveedor = $_POST['nombre_proveedor'];
    $telefono_proveedor = $_POST['telefono_proveedor'];
    $direccion_proveedor = $_POST['direccion_proveedor'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO proveedor (nombre, telefono, direccion) VALUES ($1, $2, $3)";
    $result = pg_prepare($conn, "insert_proveedor", $sql);
    $result = pg_execute($conn, "insert_proveedor", array($nombre_proveedor, $telefono_proveedor, $direccion_proveedor));

    if ($result) {
        echo "Proveedor agregado exitosamente";
    } else {
        echo "Error: " . pg_last_error($conn);
    }
}

// Cerrar conexión
pg_close($conn);
?>

