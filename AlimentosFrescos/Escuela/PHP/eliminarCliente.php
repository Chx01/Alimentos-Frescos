<?php
try {
        $pdo = new PDO("pgsql:host=localhost;dbname=Alimentos;user=postgres;password=buama.2003");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['carnet'])) {
            $cliente = $_POST['carnet']; // Obtener ID de $_POST

            $stmt = $pdo->prepare("DELETE FROM cliente WHERE carnet = ?");
            $stmt->execute([$cliente]);

            echo "Cliente eliminado correctamente";
        }
    } catch (PDOException $e) {
        echo "Error al eliminar el cliente: " . $e->getMessage();
    }
    exit;
?>