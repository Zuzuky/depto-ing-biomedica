<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Información de accesorios</title>
</hedead>
<body>
    <header>
        <a href="{{ route('accessory.index') }}">Regresar</a>
    </header>
    <hr>
    <h1>Accesorio ID {{ $accessory->id }}</h1>
    <ul>
        <li>Id: {{ $accessory->id }}</li>
        <li>Nombre: {{ $accessory->nombre }}</li>
        <li>Marca: {{ $accessory->marca }}</li>
        <li>Modelo: {{ $accessory->modelo }}</li>
        <li>Fecha y hora de registro: {{ $accessory->created_at }}</li>
        <li>Fecha y hora de modificación: {{ $accessory->updated_at }}</li>
    </ul>
</body>
</html>