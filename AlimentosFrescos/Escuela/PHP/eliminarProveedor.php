<?php
try {
        $pdo = new PDO("pgsql:host=localhost;dbname=Alimentos;user=postgres;password=buama.2003");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_proveedor'])) {
            $id_proveedor = $_POST['id_proveedor']; // Obtener ID de $_POST

            $stmt = $pdo->prepare("DELETE FROM proveedor WHERE id_proveedor = ?");
            $stmt->execute([$id_proveedor]);

            echo "Proveedor eliminado correctamente";
        }
    } catch (PDOException $e) {
        echo "Error al eliminar el proveedor: " . $e->getMessage();
    }
    exit;


?>