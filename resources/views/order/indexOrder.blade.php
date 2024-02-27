<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
<body>
<h1>Listado de Ordenes</h1> 

<table border="1">
    <thead>
        <tr>
            <th>Id equipo medico</th>
            <th>id jefa</th>
            <th>id_eq_med</th>
            <th>id_ing_biomed</th>
            <th>id_area</th>
            <th>falla</th>
        
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->id_jefa }}</td>
                <td>{{ $order->id_eq_med }}</td>
                <td>{{ $order->id_ing_biomed }}</td>
                <td>{{ $order->id_area }}</td>
                <td>{{ $order->falla }}</td>   
                <td>{{ $order->created_at }}</td> 
                <td>
                    <a href="{{ route('order.show', $order) }}">Ver</a>
                    <a href="{{ route('order.edit', $order) }}">Editar</a>
                    <form action= "{{ route('order.destroy', $order) }}" method= "POST">
                        @csrf
                        @method( 'DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>