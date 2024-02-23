<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar accesorio</title>
</head>
<body>
    <header>
        <a href="{{ route('accessory.index') }}">Regresar</a>
    </header>
    <hr>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h1>Editar accesorio con ID {{ $accessory->id }}</h1>
    <form action="{{ route('accessory.update', $accessory) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ $accessory->nombre }}" required>
        <label for="marca">Marca</label>
        <input type="text" name="marca" value="{{ $accessory->marca }}" required>
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo" value="{{ $accessory->modelo }}" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>