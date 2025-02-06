<?php
// agregar_contacto.php

include 'conexion.php';  // Incluir el archivo de conexión

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];

    $sql = "INSERT INTO contactos (nombre, apellido, telefono, email, direccion) 
            VALUES (:nombre, :apellido, :telefono, :email, :direccion)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nombre' => $nombre, 'apellido' => $apellido, 'telefono' => $telefono, 'email' => $email, 'direccion' => $direccion]);

    echo "Contacto agregado con éxito.";
    echo "<br><a href='index.php'>Volver</a>";
}
?>