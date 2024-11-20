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
    // Comprobar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tipo_cliente = $_POST['tipo_cliente'];
        $nombre_cliente = $_POST['nombre_cliente'];
        $carnet_cliente = $_POST['carnet_cliente'];
        $telefono_cliente = $_POST['telefono_cliente'];

        // Realizar la inserción en la base de datos
        $insert_query = "INSERT INTO cliente (tipo, nombre, carnet, telefono) VALUES (:tipo_cliente,:nombre_cliente, :carnet_cliente, :telefono_cliente)";
        $stmt = $conn->prepare($insert_query); 
 // Vincular parámetros   
        $stmt->bindParam(':tipo_cliente',  $tipo_cliente);   
        $stmt->bindParam(':nombre_cliente', $nombre_cliente);   
        $stmt->bindParam(':carnet_cliente', $carnet_cliente);
        $stmt->bindParam(':telefono_cliente',$telefono_cliente);      

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
    $conn = null;
?>