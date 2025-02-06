<?php
// eliminar_contacto.php

include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM contactos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    echo "Contacto eliminado con éxito.";
    echo "<br><a href='listar_contactos.php'>Ver Contactos</a>";
} else {
    echo "ID no proporcionado.";
}
?>
