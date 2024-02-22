<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
<body>
<h1>Listado de Equipo Medico</h1> 

<table border="1">
    <thead>
        <tr>
            <th>Id equipo medico</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>No/serie</th>
            <th>Status Equipo Medico</th>
            <th>Id area</th>
            <th>Id accesorio</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($equipments as $equipment)
            <tr>
                <td>{{ $equipment->id}}</td>
                <td>{{ $equipment->nombre}}</td>
                <td>{{ $equipment->marca}}</td>
                <td>{{ $equipment->modelo}}</td>
                <td>{{ $equipment->n_serie}}</td>
                <td>{{ $equipment->status_eq_med}}</td> 
                <td>{{ $equipment->id_area}}</td>  
                <td>{{ $equipment->id_accesorio}}</td>   
                <td>{{ $equipment->created_at}}</td> 
                <td>
                    <a href="{{ route('equipment.show', $equipment) }}">Ver</a>
                    <a href="{{ route('equipment.edit', $equipment) }}">Editar</a>
                    <form action= "{{ route('equipment.destroy', $equipment) }}" method= "POST">
                        @csrf
                        @method( 'DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>