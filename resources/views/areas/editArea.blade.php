<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar área</title>
</head>
<body>
    <header>
        <a href="{{ route('area.index') }}">Regresar</a>
    </header>
    <hr>
    <h1>Editar área con ID{{ $area->id }}</h1>
    <form action="{{ route('area.update', $area) }}" method="post">
        @csrf
        @method('PATCH')
        <label for="servicio">Servicio</label>
        <input type="text" name="servicio" value="{{ $area->servicio }}" required>
        @error('servicio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="piso">Piso</label>
        <input type="text" name="piso" value="{{ $area->piso }}" required>
        @error('piso')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="id_biomed">ID de Biomédico</label>
        <input type="text" name="id_biomed" value="{{ $area->id_biomed }}" required>
        @error('id_biomed')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="id_jefe">ID de Jefe</label>
        <input type="text" name="id_jefe" value="{{ $area->id_jefe }}" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>