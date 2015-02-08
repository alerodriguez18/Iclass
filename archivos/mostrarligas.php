<?php
session_start();
 echo "<html>";
 echo "<body bgcolor='#2c4762'>";
 
 $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
  $sql=" select * from ligas where idclase='".$_SESSION["idclase"]."';";  
  $resultado=mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL select de ligas ");
     echo "<font color=FFFFFF>LIKS</font><br>";
   while ($row=mysql_fetch_array($resultado))
   {	
	  echo "<a href='$row[1]'><font color=FFFFFF><li>$row[0]</li></font></a>";
    
   }
    mysql_free_result($resultado);
	mysql_close($conexion);
	echo "</body>";
	echo "</html>";
?>

