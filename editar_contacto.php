<?php
// editar_contacto.php

include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM contactos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $contacto = $stmt->fetch();
} else {
    echo "ID no proporcionado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Contacto</title>
</head>
<body>
    <h2>Editar Contacto</h2>
    <form action="actualizar_contacto.php" method="POST">
        <input type="hidden" name="id" value="<?= $contacto['id'] ?>">
        Nombre: <input type="text" name="nombre" value="<?= htmlspecialchars($contacto['nombre']) ?>" required><br>
        Apellido: <input type="text" name="apellido" value="<?= htmlspecialchars($contacto['apellido']) ?>" required><br>
        Teléfono: <input type="text" name="telefono" value="<?= htmlspecialchars($contacto['telefono']) ?>" required><br>
        Correo electrónico: <input type="email" name="email" value="<?= htmlspecialchars($contacto['email']) ?>" required><br>
        Dirección: <textarea name="direccion"><?= htmlspecialchars($contacto['direccion']) ?></textarea><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
