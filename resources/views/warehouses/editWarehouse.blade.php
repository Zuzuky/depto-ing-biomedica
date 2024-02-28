<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <header>
        <a href="{{ route('warehouse.index') }}">Regresar</a>
    </header>
    <hr>
    <h1>ID {{ $warehouse->id }}</h1>
    <form action="{{ route('warehouse.update', $warehouse) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="id_accesorio">Id de accesorio</label>
        <input type="text" name="id_accesorio" value="{{ $warehouse->id_accesorio }}" required>
        @error('id_accesorio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="stock">Stock</label>
        <input type="text" name="stock" value="{{ $warehouse->stock }}" required>
        @error('stock')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="min_stock">Stock mínimo</label>
        <input type="text" name="min_stock" value="{{ $warehouse->min_stock }}" required>
        @error('min_stock')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="max_stock">Stock máximo</label>
        <input type="text" name="max_stock" value="{{ $warehouse->max_stock }}" required>
        @error('max_stock')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>