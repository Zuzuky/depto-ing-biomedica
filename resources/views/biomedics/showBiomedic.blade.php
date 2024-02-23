<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show biomedics</title>
</head>
<body>
    <ul>
        <il>ID {{$biomedic->id}}</il>
        <il>Nombre {{$biomedic->nombre}}</il>
        <il>Apellido Paterno {{$biomedic->apellidoP}}</il>
        <il>Apellido Materno {{$biomedic->iapellidoM}}</il>
        <il>Puesto {{$biomedic->puesto}}</il>
        <il>Fecha de nacimiento {{$biomedic->ifecha_nac}}</il>
        <il>Domicilio {{$biomedic->idomicilio}}</il>
        <il>Telefono {{$biomedic->telefono}}</il>
        <il>Fecha de creación  {{$biomedic->created_at}}</il>
        <il>Última modificación {{$biomedic->updated_at}}</il>
    </ul>
</body>
</html>