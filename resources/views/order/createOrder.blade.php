<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden Equipo Medico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bod">
    <div class="nav2">

        <a href="{{route('order.index') }}">Listado</a>
        <hr>
        @include('parciales.formError')

        <form action="{{route('order.store') }}" method="POST">
            @csrf
        
            
            <label for="id_jefa">Id Jefa: </label>
            <input type="text" name="id_jefa" value="{{old('id_jefa') }}" required>
            @error('id_jefa')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror    
            <br><br>

            <label for="id_eq_med">Id Equipo Medico: </label>
            <input type="text" id="id_eq_med" name="id_eq_med" value="{{old('id_eq_med')}}" required>
            @error('id_eq_med')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <br><br>

            <label for="id_ing_biomed">Id Ing. Biomedico: </label>
            <input type="text" id="id_ing_biomed" name="id_ing_biomed" value="{{old('id_ing_biomed')}}" required>
            @error('id_ing_biomed')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>

            <label for="id_area">Id Area: </label>
            <input type="text" id="id_area" name="id_area" value="{{old('id_area')}}" required>
            @error('id_area')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>

            <label for="falla">Descripcion falla: </label><br>
            <textarea name="falla" id="" cols="30" rows="10" value="{{old('falla')}}" required></textarea>
            @error('falla')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br><br>

            <button type="submit">Enviar</button>
        </form>
       
    </div>
</body>
</html>