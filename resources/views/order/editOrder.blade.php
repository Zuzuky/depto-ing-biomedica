<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Orden</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bod">
    <div class="nav2">

        
        <a href="info">Hacia info</a>
        <hr>
        @include('parciales.formError')
   
        <form action=" {{route('order.update', $order->id) }}" method="POST">
            @csrf
            @method('PATCH')  
            <label for="id_jefa">Id Jefa</label>
            <input type="text"  name="id_jefa" value="{{ $order->id_jefa }}">
            <br><br>
            <label for="id_eq_med">Id Equipo Medico</label>
            <input type="text" id="id_eq_med" name="id_eq_med" value="{{ $order->id_eq_med }}">
            <br><br>
            <label for="id_ing_biomed">Id Ing. Biomedico</label>
            <input type="text" id="id_ing_biomed" name="id_ing_biomed" value="{{ $order->id_ing_biomed }}">
            <br><br>
            <label for="id_area">Id Area</label>
            <input type="text" id="id_area" name="id_area" value="{{ $order->id_area }}">
            <br><br>
            <label for="falla">Descripcion falla</label>
            <br>
            <textarea name="falla" cols="30" rows="10"> {{ $order->falla }} </textarea>
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>

