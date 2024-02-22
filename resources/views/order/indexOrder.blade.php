<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
<body>
<h1>Listado de ordenes de servicio</h1> 

<table border="1">
    <thead>
        <tr>
            <th>No. reporte</th>
            <th>Id Jefa</th>
            <th>Id Equipo Medico</th>
            <th>Id Ing. Biomedico</th>
            <th>Id Servicio</th>
            <th>Descripcion falla</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->no_reporte}}</td>
                <td>{{ $order->id_jefa}}</td>
                <td>{{ $order->id_eq_med}}</td>
                <td>{{ $order->id_ing_biomed}}</td>
                <td>{{ $order->id_area}}</td>
                <td>{{ $order->falla}}</td>  
            </tr>
        @endforeach



     
    </tbody>
</table>

</body>
</html>