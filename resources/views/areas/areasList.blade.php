<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Áreas</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Servicio</th>
                <th>Piso</th>
                <th>ID de Biomédico</th>
                <th>ID de Jefe</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($areas as $area)
                <tr>
                    <td>{{ $area->id }}</td>
                    <td>{{ $area->servicio }}</td>
                    <td>{{ $area->piso }}</td>
                    <td>{{ $area->id_biomed }}</td>
                    <td>{{ $area->id_jefe }}</td>
                    <td>
                        <a href="{{ route('area.show', $area) }}">Ver info </a> |
                        <a href="{{ route('area.edit', $area) }}">Editar area</a>
                        <form action="{{ route('area.destroy', $area) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('area.create') }}">Agregar nueva área</a>
</body>
</html>