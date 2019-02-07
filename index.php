<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $resultado = $conexion->query("SELECT * FROM equipo");
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <nav>
     <div class="nav-wrapper">
       <ul id="nav-mobile" class="right hide-on-med-and-down">
         <li><a href="equipos.php">Lista equipos</a>
         <li><a href="partidos.php">Lista partidos</a>
       </ul>
     </div>
   </nav>
  </body>
</html>
