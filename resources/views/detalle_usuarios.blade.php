<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color: #0080ff;


        }
#general{
    text-align: center;
    margin-top: 200px;
    font-size: 30px;
}
#content{

}


    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="general">
        <center>
    <h1>DETALLE DE USUARIOS</h1>
    </center>
    <hr>
    <container id="conten">
        <div id="nombre">
    <b>NOMBRE: {{$detalle_usuarios->app . '   ' . $detalle_usuarios->ap . '   ' . $detalle_usuarios-> nombre}}</b><br>
    </div>

   <b id="clave">MATRICULA: {{$detalle_usuarios->clave}}</b><br>
   <b id="fecha">FECHA DE NACIMIENTO: {{$detalle_usuarios->fn}}</b><br>
   <b id="genero">GENERO: {{$detalle_usuarios->gen}}</b><br>
   <b id="email">EMAIL: {{$detalle_usuarios->email}}</b><br>
   <b id="pass">CONTRASENA: {{$detalle_usuarios->pass}}</b><br>
   <b id="clave">RESULTADO: {{$detalle_usuarios->id_usuario-20}}</b><br>
</container>
   </div>



</body>
</html>