<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de accesorios</title>
</head>
<body>
    <h1>Lista de accesorios</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accesories as $accessory)
                <tr>
                    <td>{{ $accessory->id }}</td>
                    <td>{{ $accessory->nombre }}</td>
                    <td>{{ $accessory->marca }}</td>
                    <td>{{ $accessory->modelo }}</td>
                    <td>
                        <a href="{{ route('accessory.show', $accessory) }}">Ver info</a> |
                        <a href="{{ route('accessory.edit', $accessory) }}">Editar accesorio</a> 
                        <form action="{{ route('accessory.destroy', $accessory) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('accessory.create') }}">Agregar nuevo accesorio</a>
</body>
</html>