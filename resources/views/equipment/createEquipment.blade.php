<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expediente Equipo Medico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bod">
    <div class="nav2">

        
        <a href="{{route('equipment.index') }}">Hacia info</a>
        <hr>
        @include('parciales.formError')
        <form action="{{route('equipment.store') }}" method="POST">
            @csrf
            
            
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}" required>
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <br><br>
            <label for="marca">Marca</label>
            <input type="text" id="marca" name="marca" value="{{old('marca')}}" required>
            @error('marca')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            <br><br>
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" value="{{old('modelo')}}" required> 
            @error('modelo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
            <label for="n_serie">No/serie</label>
            <input type="text" id="n_serie" name="n_serie" value="{{old('n_serie')}}" required>
            @error('n_serie')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
            <select name="status_eq_med" id="status_eq_med">
                <option value="---">---------------</option>
                <option value="Funcionando" @selected (old('status_eq_med') ==  'Funcionando')>Funcionando</option>
                <option value="En reparacion" @selected(old('status_eq_med') ==  'En reparacion')>En reparacion</option>
                <option value="Fuera servicio" @selected(old('status_eq_med') ==  'Fuera servicio')>Fuera de servicio</option>
            </select>
            <br><br>
            <label for="id_area">Id area</label>
            <input type="text" id="id_area" name="id_area" value="{{old('id_area')}}" required>
            @error('id_area')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
            <label for="id_accesorio">Id accesorio</label>
            <input type="text" id="id_accesorio" name="id_accesorio" value="{{old('id_accesorio')}}" required>
            @error('id_accesorio')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>