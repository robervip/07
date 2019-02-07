<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
  $idEquipo=$_GET["idEquipo"];
  $resultadoLocal = $conexion->query("SELECT * FROM partido WHERE local=".$idEquipo);
  $resultadoVisitante = $conexion->query("SELECT * FROM partido WHERE visitante=".$idEquipo);
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
          <th>ID Partido</th>
          <th>Resultado</th>
          <th>Fecha</th>
        </tr>
        <?php
          foreach ($resultadoLocal as $partido) {
            echo "<tr>";
            echo "<td>".$partido['id_partido']."</td>";
            echo "<td>".$partido['resultado']."</td>";
            echo "<td>".$partido['fecha']."</td>";
            echo "</tr>";
          }
          foreach ($resultadoVisitante as $partido) {
            echo "<tr>";
            echo "<td>".$partido['id_partido']."</td>";
            echo "<td>".$partido['resultado']."</td>";
            echo "<td>".$partido['fecha']."</td>";
            echo "</tr>";
          }
        ?>
      </table>
    </div>
  </body>
  </html>
