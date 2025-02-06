
<!-- HTML -->
<!-- form_agregar.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Contacto</title>
</head>
<body>
    <h2>Agregar un nuevo contacto</h2>
    <form action="agregar_contacto.php" method="POST">
        Nombre: <input type="text" name="nombre" required><br>
        Apellido: <input type="text" name="apellido" required><br>
        Teléfono: <input type="text" name="telefono" required><br>
        Correo electrónico: <input type="email" name="email" required><br>
        Dirección: <textarea name="direccion"></textarea><br>
        <input type="submit" value="Guardar">
    </form>

    <a href="listar_contactos.php">Ver Listas</a>
</body>
</html>
