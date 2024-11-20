<?php 
try { 
    $pdo = new PDO("pgsql:host=localhost;dbname=Alimentos;user=postgres;password=buama.2003"); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_fecha'])) { 
        $id_fecha = $_POST['id_fecha']; // Obtener ID de $_POST 

        $stmt = $pdo->prepare("DELETE FROM compra WHERE id_fecha = ?"); 
        $stmt->execute([$id_fecha]); 

        echo "Artículo eliminado correctamente"; 
    } 
} catch (PDOException $e) { 
    echo "Error al eliminar el artículo: " . $e->getMessage(); 
} 
exit; 
?>

