<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    body{
        color: ;
        background-image: url("/miguel/metal.gif");
        background-size: 300px;              }
    #best{
        margin-top: 80px;
    background-image: url("/miguel/imagenes/gears.jpg");
    background-repeat: no-repeat;
    background-size: 1300px;
        text-align: center;
        width: 50%;                          }
  
    input,select{
            margin-left: 100px;
            float: center;
            background:;                      }
        #lol{            color: yellow;       }
     #coca {      background: #2C4EC0;        }
        #cma{   margin-left: 300px;           }
       #lom{ margin-left: 340px;              }
       #comit{ margin-left: 380px;            }
        select{  background: #C1BCBC;         }
</style>
</head>
<body>
    
<form action="{{ route('salvar_usuarios',['id' => $usuarios->id_usuario]) }}" method="POST" class="row g-3" enctype="multipart">
{{ csrf_field() }}
{{method_field('PUT')}}
<center><h1>EDITAR DE USUARIOS</h1>
</center>
    
    <hr>

    
   <div class="input-group">
<span class="input-group-text" style="margin-left: 60px "> MATRICULA:</span>
<input type="text" aria-label="First name" class="form-control" name="clave" style="margin-right: 20px" value="{{ $usuarios -> clave }}"> 
</div>
<div class="input-group">
<span class="input-group-text" style="margin-left: 60px"> NOMBRE:</span>
<input type="text" aria-label="First name" value="{{ $usuarios -> nombre }}" class="form-control" name="nombre" style="margin-right: 20px">
</div>
<div class="input-group">
  <span class="input-group-text" style="margin-left: 60px">APELLIDO  MATERNO</span>
  <input type="text" aria-label="First name" class="form-control" name="app" value="{{ $usuarios -> ap }}">

  <span class="input-group-text"style="margin-left: 20px"> APELLIDO PATERNO</span>
  <input type="text" aria-label="LApellido Paterno" class="form-control" name="ap" value="{{ $usuarios -> app }}">
</div>
<div class="input-group" id="lom">
<span class="input-group-text">
FECHA DE NACIMIENTO</span>
 <input type="date" name="fn" value="{{ $usuarios -> fn }}"></div>
 <div  class="input-group"><div id="cma">
 <button type="button" class="btn btn-warning"> 
    <input type="radio" name="gen" value="Femenino"  {{ $usuarios->gen == "FEMENINO"?'cheked':''; }}> Femenino   <br></button>

<button type="button" class="btn btn-secondary" >
<input type="radio" name="gen"  value="Masculino"  {{ $usuarios -> gen == "MASCULINO"?'cheked':''; }}> Masculino <br></button>
</div>
</div>     
<input type="file" name="foto" id=""value="{{ $usuarios -> foto }}">
  
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1" style="margin-left: 60px">Email</span>
  
  <input type="text"  name="email" value="{{ $usuarios -> email }}" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" style="margin-right: 20px">
  <div class="input-group mb-3">
    </div><br>

  <span class="input-group-text" id="basic-addon1" style="margin-left: 60px">Contraseña</span>
  
  <input type="text" name="pass" value="{{ $usuarios -> pass }}" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" style="margin-right: 20px">
</div>
<center>

<div class="input-group mb-3" id="comit">
<span class="input-group-text" id="basic-addon1" style="margin-left: 60px">NIVEL</span>
                 <select name="nivel" id="">
                 @foreach($nivel as $user)
                  <option value="{{ $user['nombre'] }}">
                  {{ $user ['nombre'] }}
                  @endforeach
                    
                  </option>

                 </select>
                </div>
                <div class="input-group mb-3" id="comit">
                    <span class="input-group-text" id="basic-addon1" style="margin-left: 15px">Activo</span>
                    <button type="button" class="btn btn-success" >  <input type="checkbox" name="activo" {{ $usuarios -> activo >0?'cheked':''; }}></button> 
                </div>
                    
                    <br><div>
                  
                    <button type="submit" class="btn btn-primary" value="">Salvar el registro del Alumno </button>
                   
</form>
<hr>
<a href="{{route('lista_usuarios')}}"><button class="btn btn-primary" type="button">REGRESAR A LA LISTA DE USUARIOS</button> </a>
</center>




</body>
</html>