<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar</title>
</head>
<body>
    <header>
        <a href="{{ route('warehouse.index') }}">Regresar</a>
    </header>
    <hr>
    <h1>Almacén ID {{ $warehouse->id }}</h1>
    <ul>
        <li>Id: {{ $warehouse->id }}</li>
        <li>Id de accesorio: {{ $warehouse->id_accesorio }}</li>
        <li>Stock: {{ $warehouse->stock }}</li>
        <li>Stock mínimo: {{ $warehouse->min_stock }}</li>
        <li>Stock máximo: {{ $warehouse->max_stock }}</li>
        <li>Fecha y hora de registro: {{ $warehouse->created_at }}</li>
        <li>Fecha y hora de modificación: {{ $warehouse->updated_at }}</li>
    </ul>
</body>
</html>