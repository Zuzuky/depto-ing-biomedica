<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar nuevo accesorio</title>
</head>
<body>
    <header>
        <a href="{{ route('accessory.index') }}">Listado de accesorios</a>
    </header>
    <hr>
    <h1>Agregar nuevo accesorio</h1>
    <form action="{{ route('accessory.store') }}" method="POST">
        @csrf
         <label for="nombre">Nombre</label>
         <input type="text" name="nombre" value="{{ old('nombre') }}" required>
         @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <br>
         <label for="marca">Marca</label>
         <input type="text" name="marca" value="{{ old('marca') }}" required>
         @error('marca')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <br>
         <label for="modelo">Modelo</label>
         <input type="text" name="modelo" value="{{ old('modelo') }}" required>
         @error('modelo')
         <div class="alert alert-danger">{{ $message }}</div>
         @enderror
         <br>
         <input type="submit" value="Enviar">
    </form>
</body>
</html>