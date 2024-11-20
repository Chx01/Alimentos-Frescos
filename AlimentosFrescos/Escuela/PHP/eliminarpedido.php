<?php 
try { 
    $pdo = new PDO("pgsql:host=localhost;dbname=Alimentos;user=postgres;password=buama.2003"); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_pedido'])) { 
        $id_pedido = $_POST['id_pedido']; // Obtener ID de $_POST 

        $stmt = $pdo->prepare("DELETE FROM pedido WHERE id_pedido = ?"); 
        $stmt->execute([$id_pedido]); 

        echo "Artículo eliminado correctamente"; 
    } 
} catch (PDOException $e) { 
    echo "Error al eliminar el artículo: " . $e->getMessage(); 
} 
exit; 
?>