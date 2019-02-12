<?php
$conexion=new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
  echo "fallo al conectar MySql: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $resultado = $conexion->query("SELECT * FROM partido");

}
 ?>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <table align='center' border=1>
       <tr>
         <th>ID</th>
         <th>Local</th>
         <th>Visitante</th>
         <th>Resultado</th>
      </tr>
        <?php
        foreach ($resultado as $partido){
         echo "<tr>";
          echo "<td>" .$partido['id_partido']."</td>";
         echo "<td><a href=equipo.php?equipo=".$partido['local'].">" .$partido['local']."</a></td>";
         echo "<td><a href=equipo.php?equipo=".$partido['visitante'].">" .$partido['visitante']."</a></td>";
         echo "<td>" .$partido['resultado']."</td>";
         echo "</tr>";
       }
         ?>
    </table>
   </body>
 </html>
