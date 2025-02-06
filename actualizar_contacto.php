<?php
// actualizar_contacto.php

include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];

    $sql = "UPDATE contactos SET nombre = :nombre, apellido = :apellido, telefono = :telefono, 
            email = :email, direccion = :direccion WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id, 'nombre' => $nombre, 'apellido' => $apellido, 
                    'telefono' => $telefono, 'email' => $email, 'direccion' => $direccion]);

    echo "Contacto actualizado con éxito.";
    echo "<br><a href='listar_contactos.php'>Ver Contactos</a>";
}
?>
