<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Bosses</title>
</head>
<body>
    <header><a href="{{route('areaBosses.index')}}">Regresar</a></header>
    <hr>
    <h1>Boss ID {{$areaBoss->id}}</h1>
    <ul>
        <li>ID {{$areaBoss->id}}</li>
        <li>Nombre {{$areaBoss->nombre}}</li>
        <li>Apellido Paterno {{$areaBoss->apellidoP}}</li>
        <li>Apellido Materno {{$areaBoss->apellidoM}}</li>
        <li>Fecha de nacimiento {{$areaBoss->fecha_nac}}</li>
        <li>Domicilio {{$areaBoss->domicilio}}</li>
        <li>Telefono {{$areaBoss->telefono}}</li>
        <li>Fecha de creación  {{$areaBoss->created_at}}</li>
        <li>Última modificación {{$areaBoss->updated_at}}</li>
    </ul>
</body>
</html>
