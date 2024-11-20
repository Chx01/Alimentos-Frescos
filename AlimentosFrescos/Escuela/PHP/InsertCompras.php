<?php   
// Configuración de la base de datos   
$host = 'localhost'; // Cambia esto si tu servidor es diferente   
$dbname = 'Alimentos'; // Cambia por el nombre de tu base de datos   
$username = 'postgres'; // Cambia por tu usuario de base de datos   
$password = 'buama.2003'; // Cambia por tu contraseña de base de datos 

try {   
    // Crear conexión   
    $conn = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);   
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   

    // Verificar si se han enviado datos   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {   
        // Recoger datos del formulario   
        $fecha_compra = $_POST['fecha_compra'];   
        $cantidad_compra = $_POST['cantidad_compra'];   
        $precio_compra = $_POST['precio_compra'];   

        // Preparar la consulta SQL   
        $sql = "INSERT INTO compra (fecha, cant, precio) VALUES (:fecha, :cantidad, :precio)";   
        $stmt = $conn->prepare($sql);   

        // Vincular parámetros   
        $stmt->bindParam(':fecha', $fecha_compra);   
        $stmt->bindParam(':cantidad', $cantidad_compra);   
        $stmt->bindParam(':precio', $precio_compra);   

        // Ejecutar la consulta   
        if ($stmt->execute()) {   
            echo "Compra añadida exitosamente.";   
        } else {   
            echo "Error al añadir la compra.";   
        }   
    }   
} catch (PDOException $e) {   
    echo "Error de conexión: " . $e->getMessage();   
}   

// Cerrar la conexión   
$conn = null;   
?>  

