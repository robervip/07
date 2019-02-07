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
         <li><a href="index.php">Inicio</a>
         <li><a href="jugadores.php">Lista jugadores</a>
       </ul>
     </div>
   </nav>
   <table border=1 cellpadding=4 cellspacing=0>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Ciudad </th>
        <th>Partidos jugados</th>
      </tr>
      <?php
      foreach ($resultado as $equipo) {
        echo "<tr>";
        echo "<td><a href='jugadores.php?idJugador=".$equipo['id_equipo']."'>".$equipo['id_equipo']."</a</td>";
        echo "<td>".$equipo['nombre']."</td>";
        echo "<td>".$equipo['ciudad']."</td>";
        echo "<td><a href='partidos.php?idEquipo=".$equipo['id_equipo']."'>ver</a</td>";
        echo "</tr>";
      }
      ?>
    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>
