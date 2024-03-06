<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Jefes de Area</title>
</head>
<body>
    <h1>Lista de jefes</h1>
    <table border=1>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>ApelldoP</th>
            <th>ApellidoM</th>
            <th>Fecha de nacimiento</th>
            <th>Domicilio</th>
            <th>teléfono</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($bosses as $boss)
            <tr>
                <td>{{$boss->id}}</td>
                <td>{{$boss->nombre}}</td>
                <td>{{$boss->apellidoP}}</td>
                <td>{{$boss->apellidoM}}</td>
                <td>{{$boss->puesto}}</td>
                <td>{{$boss->fecha_nac}}</td>
                <td>{{$boss->domicilio}}</td>
                <td>{{$boss->telefono}}</td>
                <td><a href="{{route('areaBosses.show', $boss)}}">Ver Info</a><a href="{{route('areaBosses.edit', $boss)}}">Editar Biomedico</a>
                    <form action="{{route('areaBosses.destroy',$boss)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('areaBosses.create')}}">Agregar Jefe</a>
</body>
</html>
