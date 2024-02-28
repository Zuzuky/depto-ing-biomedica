<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Almacén</title>
</head>
<body>
    <h1>Lista del almacén</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID de accesorio</th>
                <th>Stock</th>
                <th>Stock mínimo</th>
                <th>Stock máximo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($warehouses as $warehouse)
                <tr>
                    <td>{{ $warehouse->id }}</td>
                    <td>{{ $warehouse->id_accesorio }}</td>
                    <td>{{ $warehouse->stock }}</td>
                    <td>{{ $warehouse->min_stock }}</td>
                    <td>{{ $warehouse->max_stock }}</td>
                    <td>
                        <a href="{{ route('warehouse.show', $warehouse) }}">Ver info</a> |
                        <a href="{{ route('warehouse.edit', $warehouse) }}">Editar</a>
                        <form action="{{ route('warehouse.destroy', $warehouse) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('warehouse.create') }}">Agregar nuevo</a>
</body>
</html>