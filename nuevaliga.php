<?php
session_start();
   $nom=$_POST["nombre"];
   $url=$_POST["url"];
   $desc=$_POST["textarea"];
  $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
  $sql=" insert into ligas values('$nom','$url','$desc','".$_SESSION["idclase"]."');";  
  $resultado=mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL select de ligas ");
   {print "<meta http-equiv=Refresh content=\"0 ; url=Ligas.php\">"; }
?>