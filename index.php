<!DOCTYPE html>
<html lang="es">

    <head>
        <title> Contacto</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilos.css">
    </head>

    <body>
        <form action="enviar-prueba.php" method="POST">
            <h2>Contacto</h2>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="correo" placeholder="Correo" required>
            <input type="text" name="telefono" placeholder="Telefono" required>
            <textarea name="mensaje" placeholder="Esciba aqui su mensaje" required></textarea>

            <input type="submit" value="Enviar" id="boton">
        </form>
    </body>

</html>
