<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<a href="/LARAVEL_MIKE_1/public/">USUARIOS</a>
       
<table class="table table-striped table-dark">
<tr>
<td>ID</td>
<td>CLAVE</td>
<td>NOMBRE</td>
<td>CANTIDAD </td>
<td>COSTO</td>
<td>ACTIVO</td>
<td>NOMBRE_FOTO</td>
<td>FOTO</td>

</tr>
@foreach($productos1 as $producto)
<tr>
    <td>{{ $producto -> id_productos }}</td>
    <td>{{ $producto -> clave }}</td>
    <td>{{ $producto -> nombre }}</td>
    <td>{{ $producto -> cantidad }}</td>
    <td>{{ $producto -> costo }}</td>
    <td>{{ $producto -> activo }}</td>
    <td>{{ $producto -> foto }}</td>
    <td><img src="{{ asset ('archivos_productos/'.$producto->foto) }}" style="width:50px"></td>

</tr>
@endforeach

    </table>
    
</body>
</html>