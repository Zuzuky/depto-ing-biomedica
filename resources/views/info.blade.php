<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infomarcion</title>
   
</head>
<body>
    <a href="equipo_medico">Equipo medico</a>

    <hr>
    <?php echo $tipo ?>
    <hr>
    <!-- Otra alternativa-->
    {{ $tipo }}
    <h1>Expediente Equipo medico {{$tipo}}</h1>

</body>
</html>