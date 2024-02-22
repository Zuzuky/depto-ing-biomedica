<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Equipo Medico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bod">
    <div class="nav2">

        
        <a href="info">Hacia info</a>

        <form action=" {{route('equipment.update', $equipment->id) }}" method="POST">
            @csrf
            @method('PATCH')
        <!--    
            <label for="id_eq_med">Id Equipo Medico</label>
            <input type="text" name="id_eq_med" value="{{ $equipment->id_eq_med }}">
            <br><br>
        -->
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="{{ $equipment->nombre }}">
            <br><br>
            <label for="marca">Marca</label>
            <input type="text" name="marca" value="{{ $equipment->marca }}">
            <br><br>
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" value="{{ $equipment->modelo }}">
            <br><br>
            <label for="n_serie">No/serie</label>
            <input type="text" name="n_serie" value="{{ $equipment->n_serie }}">
            <br><br>
            <select name="status_eq_med" id="status_eq_med">
                <option value="Funcionando" @selected($equipment->status_eq_med == 'Funcionando')>Funcionando</option>
                <option value="En reparacion" @selected($equipment->status_eq_med == 'En reparacion')>En reparacion</option>
                <option value="Fuera de servicio" @selected($equipment->status_eq_med == 'Fuera de servicio')>Fuera de servicio</option>
            </select>
            <br><br>
            <label for="id_area">Id area</label>
            <input type="text" id="id_area" name="id_area" value="{{ $equipment->id_area }}">
            <br><br>
            <label for="id_accesorio">Id accesorio</label>
            <input type="text" name="id_accesorio" value="{{ $equipment->id_accesorio }}">
            <br><br>
     
            
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>