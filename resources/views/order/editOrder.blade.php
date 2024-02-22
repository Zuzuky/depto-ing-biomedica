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

        
        <a href="info">Hacia info</a>

            <form action="/order" method="POST">
            @csrf
            
            <label for="no_reporte">No. reporte</label>
            <input type="text" id="no_reporte" name="no_reporte" value="{{ $order->no_reporte}}">
            <br><br>
            <label for="id_jefa">Id Jefa</label>
            <input type="text" id="id_jefa" name="id_jefa">
            <br><br>
            <label for="id_eq_med">Id Equipo Medico</label>
            <input type="text" id="id_eq_med" name="id_eq_med">
            <br><br>
            <label for="id_ing_biomed">Id Ing. Biomedico</label>
            <input type="text" id="id_ing_biomed" name="id_ing_biomed">
            <br><br>
            <label for="id_area">Id Area</label>
            <input type="text" id="id_area" name="id_area">
            <br><br>
            <label for="falla">Descripcion falla</label>
            <textarea" id=" " name="falla" cols="30" rows="10"> {{ $equipment->falla}} </textarea>
            <br><br>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>