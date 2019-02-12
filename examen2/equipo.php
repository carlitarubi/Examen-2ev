<?php
$conexion=new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
  echo "fallo al conectar MySql: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
  $equipo=$_GET["equipo"];
  $resultado = $conexion->query("SELECT * FROM equipo where id_equipo=".$equipo);
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
         <th>Equipo</th>
         <th>Ciudad</th>
         <th>Web</th>
         <th>Puntos</th>
      </tr>
        <?php
        foreach ($resultado as $datos){
         echo "<tr>";
         echo "<td>" .$datos['id_equipo']."</td>";
        echo "<td>" .$datos['nombre']."</td>";
        echo "<td>" .$datos['ciudad']."</td>";
        echo "<td>" .$datos['web']."</td>";
        echo "<td>" .$datos['puntos']."</td>";
         echo "</tr>";
       }
         ?>
    </table>
   </body>
 </html>
