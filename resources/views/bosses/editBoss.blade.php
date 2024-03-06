<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Jefes</title>
</head>
<body>
    <header><a href="{{route('areaBosses.index')}}">Regresar</a></header>
    <form action="{{route('areaBosses.update', $areaBoss->id)}}" method="post">
        @csrf
        @method('PATCH')
        <label><input type="text" name="nombre" id="nombre" placeholder="Nombre" required value="{{$areaBoss->nombre}}"></label> <br>
        <label><input type="text" name="apellidoP" id="apeP" placeholder="Apellido Paterno" required value="{{$areaBoss->apellidoP}}"></label> <br>
        <label><input type="text" name="apellidoM" id="apeM" placeholder="Apellido Materno" required value="{{$areaBoss->apellidoM}}"></label> <br>
        <label><input type="date" name="fecha_nac" id="FechaNacimiento" required value="{{$areaBoss->fecha_nac}}"></label><br>
        <label><input type="text" name="domicilio" id="domi" placeholder="Domicilio" required value="{{$areaBoss->domicilio}}"></label> <br>
        <label><input type="text" name="telefono" id="tel" placeholder="Teléfono" required value="{{$areaBoss->telefono}}"></label> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>