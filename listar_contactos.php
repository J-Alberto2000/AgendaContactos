<?php
// listar_contactos.php

include 'conexion.php';

$sql = "SELECT * FROM contactos";
$stmt = $pdo->query($sql);
$contactos = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agenda de Contactos</title>
</head>
<body>
    <h2>Lista de Contactos</h2>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Dirección</th>
        </tr>
        <?php foreach ($contactos as $contacto): ?>
        <tr>
            <td><?= htmlspecialchars($contacto['nombre']) ?></td>
            <td><?= htmlspecialchars($contacto['apellido']) ?></td>
            <td><?= htmlspecialchars($contacto['telefono']) ?></td>
            <td><?= htmlspecialchars($contacto['email']) ?></td>
            <td><?= htmlspecialchars($contacto['direccion']) ?></td>
            <td><a href="editar_contacto.php?id=<?= $contacto['id']; ?>">Editar</a></td>
            <td><a href="eliminar_contacto.php?id=<?= $contacto['id']; ?>">Eliminar</a></td>

                    <!-- <td><a href="editar_contacto.php?editar_contacto=<?= $contacto['id']; ?>">Editar</a></td> -->
        </tr>
        <?php endforeach; ?>
    </table>

    <a href="index.php">Volver</a>
</body>
</html>
