<!DOCTYPE html>
<html lang="es">
<head>
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
        #lol{            color: #0000ff;       }
     #coca {      background: #2C4EC0;        }
        #cma{   margin-left: 300px;           }
       #lom{ margin-left: 340px;              }
       #comit{ margin-left: 380px;            }
        select{  background: #C1BCBC;         }
</style>
    <tittle> </tittle>
</head>
<body>
<br>
        <br>

<br><center>
<div id="best">
<h1 id="lol">ALTA DE UN NUEVO USUARIO </h1><hr class="text-danger border-2 opacity-50">
<form action="{{ route('registrar_usuarios') }}" method="POST"class="row g-3" enctype="multipart">
  @csrf
<table>
  <tr>
    <td>
@if(count($errors) > 0)
@foreach($errors->all() as $error)
{{ $error }} <br>
@endforeach
@endif
</table>

<div class="input-group">
<span class="input-group-text" style="margin-left: 60px"> MATRICULA:</span>
<input type="text" aria-label="First name" class="form-control" name="clave" style="margin-right: 20px" value="{{ old('clave') }}">
@if($errors->first('clave') ) <i>{{ $errors->first('clave') }}</i> @endif</output>
</div>




 
<div class="input-group">
<span class="input-group-text" style="margin-left: 60px"> NOMBRE:</span>
<input type="text" aria-label="First name" class="form-control" name="nombre" style="margin-right: 20px" value="{{ old('nombre') }}">
@if($errors->first('nombre') ) <i>{{ $errors->first('nombre') }}</i> @endif
    </output>
</div>
 
<div class="input-group">
  <span class="input-group-text" style="margin-left: 60px">APELLIDO  MATERNO</span>
  <input type="text" aria-label="First name" class="form-control" name="app" value="{{ old('ap') }}">
  @if($errors->first('ap') ) <i>{{ $errors->first('ap') }}</i> @endif </output>
  </div>


  <div class="input-group">
  <span class="input-group-text"style="margin-left: 20px"> APELLIDO PATERNO</span>
  <input type="text" aria-label="LApellido Paterno" class="form-control" name="ap" value="{{ old('app') }}">
  @if($errors->first('app') ) <i>{{ $errors->first('app') }}</i> @endif
</output>
</div>

<div class="input-group" id="lom">
<span class="input-group-text">
FECHA DE NACIMIENTO</span>
 <input type="date" name="fn" value="{{ old('fn') }}">
 @if($errors->first('fn') ) <i>{{ $errors->first('fn') }}</i> @endif</output>
</div>


 


 <div  class="input-group"><div id="cma">
 <button type="button" class="btn btn-warning"> 
    <input type="radio" name="gen" value="Femenino" checked> Femenino <br></button>

<button type="button" class="btn btn-secondary" >
<input type="radio" name="gen"  value="Masculino"> Masculino <br></button>
</div>
</div>     
<input type="file" name="foto" id="">
  
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1" style="margin-left: 60px">Email</span>  
  <input type="text"  name="email" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('email') }}" style="margin-right: 20px">
  @if($errors->first('email') ) <i>{{ $errors->first('email') }}</i> @endif</output>

    </div><br>
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1" style="margin-left: 60px">Contraseña</span>
  <input type="text" name="pass" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('pass') }}" style="margin-right: 20px">
  @if($errors->first('pass') ) <i>{{ $errors->first('pass') }}</i> @endif</output>

</div>



</tr>





<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1" style="margin-left: 60px">NIVEL</span>
                 <select name="nivel" id="">
                 @foreach($tipos as $tipo)
                  <option value="{{ $tipo['nombre'] }}">
                  {{ $tipo ['nombre'] }}
                  @endforeach
                    
                  </option>
                                 </se ect>
                </div>
                <div class="input-group mb-3" id="comit">
                    <span class="input-group-text" id="basic-addon1" style="margin-left: 15px">Activo</span>
                    <button type="button" class="btn btn-success" >  <input type="checkbox" name="activo" checked></button> 
                </div>
                    
                    <br><div>
                    <button type="submit" class="btn btn-primary" value="">Salvar el registro del Alumno </button>
                    
</form>



</body>
</html>