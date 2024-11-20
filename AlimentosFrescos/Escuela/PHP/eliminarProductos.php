<?php
try {
        $pdo = new PDO("pgsql:host=localhost;dbname=Alimentos;user=postgres;password=buama.2003");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_producto'])) {
            $id_producto = $_POST['id_producto']; // Obtener ID de $_POST

            $stmt = $pdo->prepare("DELETE FROM producto WHERE id_producto = ?");
            $stmt->execute([$id_producto]);

            echo "Producto eliminado correctamente";
        }
    } catch (PDOException $e) {
        echo "Error al eliminar el producto: " . $e->getMessage();
    }
    exit;


?>
