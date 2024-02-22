<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Biomedicos</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>ApelldoP</th>
            <th>ApellidoM</th>
            <th>Puesto</th>
            <th>Fecha de nacimiento</th>
            <th>Domicilio</th>
            <th>teléfono</th>
        </thead>
        <tbody>
            @foreach($biomedics as $biomedic)
                <td>{{$biomedic->id}}</td>
                <td>{{$biomedic->nombre}}</td>
                <td>{{$biomedic->apellidoP}}</td>
                <td>{{$biomedic->apellidoM}}</td>
                <td>{{$biomedic->puesto}}</td>
                <td>{{$biomedic->fecha_nac}}</td>
                <td>{{$biomedic->domicilio}}</td>
                <td>{{$biomedic->telefono}}</td>
                <td>
                    <a href=""></a>
                </td>
            @endforeach
        </tbody>
    </table>
</body>
</html>