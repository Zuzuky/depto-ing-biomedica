<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Biomedicos</title>
</head>
<body>
    <header><a href="{{route('biomedics.index')}}">Regresar</a></header>
    <form action="{{route('biomedics.update', $biomedic->id)}}" method="post">
        @csrf
        @method('PATCH')
        <label><input type="text" name="nombre" id="nombre" placeholder="Nombre" required value="{{$biomedic->nombre}}"></label> <br>
        <label><input type="text" name="apellidoP" id="apeP" placeholder="Apellido Paterno" required value="{{$biomedic->apellidoP}}"></label> <br>
        <label><input type="text" name="apellidoM" id="apeM" placeholder="Apellido Materno" required value="{{$biomedic->apellidoM}}"></label> <br>
        <label><input type="mail" name="puesto" id="correo" placeholder="Puesto" required value="{{$biomedic->puesto}}"></label> <br>
        <label><input type="date" name="fecha_nac" id="FechaNacimiento" required value="{{$biomedic->fecha_nac}}"></label><br>
        <label><input type="text" name="domicilio" id="domi" placeholder="Domicilio" required value="{{$biomedic->domicilio}}"></label> <br>
        <label><input type="text" name="telefono" id="tel" placeholder="Teléfono" required value="{{$biomedic->telefono}}"></label> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>