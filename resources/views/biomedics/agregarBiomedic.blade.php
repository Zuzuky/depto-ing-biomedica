<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrega Biomedicos</title>
</head>
<body>
    <form action="store.php" method="post">
        <label><input type="text" name="nombre" id="nombre" placeholder="Nombre" required></label> <br>
        <label><input type="text" name="apellidoP" id="apeP" placeholder="Apellido Paterno" required></label> <br>
        <label><input type="text" name="apellidoM" id="apeM" placeholder="Apellido Materno" required></label> <br>
        <label><input type="mail" name="puesto" id="correo" placeholder="Puesto" required></label> <br>
        <label><input type="date" name="fecha_nac" id="FechaNacimiento" required></label><br>
        <label><input type="text" name="domicilio" id="domi" placeholder="Domicilio" required></label> <br>
        <label><input type="text" name="telefono" id="tel" placeholder="Teléfono" required></label> <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>