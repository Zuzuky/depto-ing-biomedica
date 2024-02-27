<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info de Ordenes</title>
</head>
<body>
    <h1>Id Orden: {{ $order->id}}</h1>
    <ul>
        <li>Id: {{ $order->id}}</li>
        <li>Id Jefa: {{ $order->id_jefa}}</li>
        <li>Id Equipo Medico: {{ $order->id_eq_med}}</li>
        <li>Id Ing. Biomedico: {{ $order->id_ing_biomed}}</li>
        <li>Id Area: {{ $order->id_area}}</li>
        <li>Falla: {{ $order->falla}}</li>
        <li> Fecha de creacion: {{ $order->created_at}} </li>
        <li>Ultima modificacion: {{ $order->updated_at}} </li>
    </ul>
</body>
</html>
