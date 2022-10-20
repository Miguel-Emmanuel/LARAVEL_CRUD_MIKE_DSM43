<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Document</title>
    <style>

#al{   color: #08F5ED;       }
#inac{   color: #FF0707;       }
#ac{   color: #08F5ED;       }
#prof{   color: #FF0707;       }
        #nav{
          
            background-color: #11ec21
        }
    </style>
</head>
<header id="nav">
<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link " href="{{route('lista_productos') }}">PRODUCTOS     </a>
      </li>
      <li></li>
      <li class="nav-item">
      <a class="nav-link " href="{{route('alta_usuarios') }}" tabindex="-1" aria-disabled="true">CREAR UN NUEVO USUARIO</a>

      </li>
    
    </ul>
  </div>
</nav>
</header>
<table class="table table-striped table-dark">
<tr>
<td>ID</td>
<td>Foto(nombre)</td>
<td>Foto</td>
<td>Nombre</td>
<td>Apellido Paterno</td>
<td>Apellido Materno</td>
<td>Fecha de Nacimiento</td>
<td>Gmail</td>
<td>password</td>
<td>activo</td>
<td>NIVEL</td>
<td>EDITAR</td>
<td>DETALLES</td>
<td>BORRAR</td>

</tr>
@foreach($usuarios1 as $usuario)
<tr>
    <td>{{ $usuario -> id_usuario }}</td>
    <td>{{ $usuario -> foto }}</td>
    <td><img src="{{ asset ('archivos/'.$usuario->foto) }}" style="width:50px"></td>
    <td>{{ $usuario -> nombre }}</td>
    <td>{{ $usuario -> app }}</td>
    <td>{{ $usuario -> ap}}</td>
    <td>{{ $usuario -> fn }}</td>
    <td>{{ $usuario -> email }}</td>
    <td>{{ $usuario -> pass }}</td>
    <td > 
    @if( $usuario -> activo== 1)
        <h5 id="ac">ACTIVO</h5>
        @else
        <i id="inac">INACTIVO</i>
       @endif
   </td>
   <td>{{ $usuario -> nivel }}   </td>
   

   
       <td>
   <a href="{{  route('detalle_usuarios',['id' => $usuario->id_usuario]) }}">  
     <button class="btn btn-warning"> DETALLE </button>  </a>&nbsp;  </td>
   <td>
   <a href="{{route('editar_usuarios',['id' => $usuario->id_usuario]) }}">
    <button class="btn btn-success">  EDITAR</button>
  </a>&nbsp;
  </td>

<td>
<a href="{{route('borrar_usuarios',['id' => $usuario->id_usuario]) }}" onclick="return confirm('ESTAS SEGURO QUE QUIERES BORRAR ESTE USUARIO');">
   <button class="btn btn-danger">BORRAR </button>
      </a></td>

  </td>

   </form>


</tr>
@endforeach

    </table>
    
</body>
</html>
