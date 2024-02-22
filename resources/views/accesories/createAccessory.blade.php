<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar nuevo accesorio</title>
</head>
<body>
    <h1>Agregar nuevo accesorio</h1>
    <form action="/accessory" method="POST">
        @csrf
         <label for="nombre">Nombre</label>
         <input type="text" name="nombre">
         <label for="marca">Marca</label>
         <input type="text" name="marca">
         <label for="modelo">Modelo</label>
         <input type="text" name="modelo">
         <br>
         <input type="submit" value="Enviar">
    </form>
</body>
</html>