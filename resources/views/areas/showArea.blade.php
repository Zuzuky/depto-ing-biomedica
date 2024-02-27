<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="{{ route('area.index') }}">Regresar</a>
    </header>
    <hr>
    <h1>Área ID {{ $area->id }}</h1>
    <ul>
        <li>ID: {{ $area->id }}</li>
        <li>Servicio: {{ $area->servicio }}</li>
        <li>Piso: {{ $area->piso }}</li>
        <li>ID de biomédico: {{ $area->id_biomed }}</li>
        <li>ID de jefe: {{ $area->id_jefe }}</li>
        <li>Fecha y hora de registro: {{ $area->created_at }}</li>
        <li>Fecha y hora de modificación: {{ $area->updated_at }}</li>
    </ul>
</body>
</html>