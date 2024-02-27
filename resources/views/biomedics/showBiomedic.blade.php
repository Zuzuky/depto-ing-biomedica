<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show biomedics</title>
</head>
<body>
    <header><a href="{{route('biomedics.index')}}">Regresar</a></header>
    <hr>
    <h1>Biomedico ID {{$biomedic->id}}</h1>
    <ul>
        <li>ID {{$biomedic->id}}</li>
        <li>Nombre {{$biomedic->nombre}}</li>
        <li>Apellido Paterno {{$biomedic->apellidoP}}</li>
        <li>Apellido Materno {{$biomedic->apellidoM}}</li>
        <li>Puesto {{$biomedic->puesto}}</li>
        <li>Fecha de nacimiento {{$biomedic->fecha_nac}}</li>
        <li>Domicilio {{$biomedic->domicilio}}</li>
        <li>Telefono {{$biomedic->telefono}}</li>
        <li>Fecha de creación  {{$biomedic->created_at}}</li>
        <li>Última modificación {{$biomedic->updated_at}}</li>
    </ul>
</body>
</html>
