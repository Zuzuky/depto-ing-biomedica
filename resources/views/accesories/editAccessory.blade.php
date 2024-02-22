<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar accesorio</title>
</head>
<body>
    <h1>Editar accesorio con ID {{ $accessory->id }}</h1>
    <form action="{{ route('accessory.update', $accessory) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ $accessory->nombre }}">
        <label for="marca">Marca</label>
        <input type="text" name="marca" value="{{ $accessory->marca }}">
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" value="{{ $accessory->modelo }}">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>