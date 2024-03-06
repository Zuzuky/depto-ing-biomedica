<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Jefe</title>
</head>
<body>
    <header><a href="{{route('areaBosses.index')}}">Regresar</a></header>
    <hr>
    <form action="{{route('areaBosses.store')}}" method="post">
        @csrf
        <label><input type="text" name="nombre" id="nombre" placeholder="Nombre" required value="{{old('nombre')}}"></label> 
        <br>
            @error('nombre')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        <label><input type="text" name="apellidoP" id="apeP" placeholder="Apellido Paterno" required value="{{old('apellidoP')}}"></label> 
            @error('apellidoP')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        <br>
        <label><input type="text" name="apellidoM" id="apeM" placeholder="Apellido Materno" required value="{{old('apellidoM')}}"></label> 
            @error('apellidoM')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        <br>
        <label><input type="date" name="fecha_nac" id="FechaNacimiento" required value="{{old('fecha_nac')}}"></label>
            @error('fecha_nac')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        <br>
        <label><input type="text" name="domicilio" id="domi" placeholder="Domicilio" required value="{{old('domicilio')}}"></label> 
            @error('domicilio')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        <br>
        <label><input type="text" name="telefono" id="tel" placeholder="Teléfono" required value="{{old('telefono')}}"></label> 
            @error('telefono')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
