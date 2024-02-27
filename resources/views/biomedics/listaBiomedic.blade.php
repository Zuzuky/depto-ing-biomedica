<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Biomedicos</title>
</head>
<body>
    <h1>Lista de biomédicos</h1>
    <table border=1>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>ApelldoP</th>
            <th>ApellidoM</th>
            <th>Puesto</th>
            <th>Fecha de nacimiento</th>
            <th>Domicilio</th>
            <th>teléfono</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($biomedics as $biomedic)
            <tr>
                <td>{{$biomedic->id}}</td>
                <td>{{$biomedic->nombre}}</td>
                <td>{{$biomedic->apellidoP}}</td>
                <td>{{$biomedic->apellidoM}}</td>
                <td>{{$biomedic->puesto}}</td>
                <td>{{$biomedic->fecha_nac}}</td>
                <td>{{$biomedic->domicilio}}</td>
                <td>{{$biomedic->telefono}}</td>
                <td><a href="{{route('biomedics.show', $biomedic)}}">Ver Info</a><a href="{{route('biomedics.edit', $biomedic)}}">Editar Biomedico</a>
                    <form action="{{route('biomedics.destroy',$biomedic)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('biomedics.create')}}">Agregar biomédico</a>
</body>
</html>