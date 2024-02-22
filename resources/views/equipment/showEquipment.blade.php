<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info de Equipo</title>
</head>
<body>
    <h1>Id Equipo Medico: {{ $equipment->id_eq_med}}</h1>
    <ul>
        <li>Id: {{ $equipment->id}}</li>
        <li>Nombre: {{ $equipment->nombre}}</li>
        <li>Marca: {{ $equipment->marca}}</li>
        <li>Modelo: {{ $equipment->modelo}}</li>
        <li>No. serie: {{ $equipment->n_serie}}</li>
        <li>Status: {{ $equipment->status_eq_med}}</li>
        <li>Id area: {{ $equipment->id_area}}</li>
        <li>Id accesorio: {{ $equipment->id_accesorio}}</li>

    </ul>
</body>
</html>