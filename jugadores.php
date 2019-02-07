<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $id=$_GET["idJugador"];
  $resultado = $conexion->query("SELECT * FROM jugador WHERE equipo=".$id);
}
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="equipos.php">Lista Equipos</a></li>
            <li><a href="partidos.php">Lista partidos</a></li>
          </ul>
        </div>
      </nav>
      <table>
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Ciudad</th>
          <th>Posición</th>
        </tr>
        <?php
          foreach ($resultado as $equipo) {
            echo "<tr>";
            echo "<td>".$equipo['id_jugador']."</td>";
            echo "<td>".$equipo['nombre']."</td>";
            echo "<td>".$equipo['apellido']."</td>";
            echo "<td>".$equipo['posicion']."</td>";
            echo "</tr>";
          }
        ?>
      </table>
    </div>
  </body>
  </html>
