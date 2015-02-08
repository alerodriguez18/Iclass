<?php
session_start();
 echo "<html>";
 echo "<body bgcolor='#2c4762'>";
 
 $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
  $sql=" select * from ligas where idclase='".$_SESSION["idclase"]."';";  
  $resultado=mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL select de ligas ");
     echo "<center><font color=FFFFFF>LINKS</font>&nbsp;&nbsp;&nbsp;&nbsp;<a href='nuevaliga.html'><i><font color='#FFFFFF'>[NUEVA LIGA]</font></i></a></center><br><br>";
     
      //echo "<center><a href='nuevaliga.html'><i><font color='#FFFFFF'>[NUEVA LIGA]</font></i></a></cneter><br><br>";
   while ($row=mysql_fetch_array($resultado))
   {	
	  echo "<center><a href='$row[1]' target=_blank><font color=FFFFFF><li>$row[0]</li></font></a></center>";
    
   }
    mysql_free_result($resultado);
	mysql_close($conexion);
	echo "</body>";
	echo "</html>";
?>