<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php
  $nombreactividad=$_POST["nombreactividad"];
  $fecha=$_POST["fecha"];
  $descripcion=$_POST["Descripcion"];
  
 $id_conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die ("Error de conexion de base de datos"); 
  mysql_select_db("a8187156_rsa", $id_conexion) or die ("Error no sirve");
  $sql="select * from planeacion;";
   $result=mysql_query($sql,$id_conexion) or die ("Error al ejecutar la sentencia SQL");
  while ($row=mysql_fetch_array($result))
  {	
  	echo  "<table>"
  	echo "<tr> \n";
  	echo "<td>".$row["nombreactividad"]."</td> \n";
	echo "<td>".$row["fecha"]."</td> \n";
	echo "<td>".$row["Descripcion"]."</td> \n";
	echo "</tr> \n";
	echo "</table>"	
	}
	
  echo "<hr width=50% align=\"center\">";
  ?>
  
  
<p>&nbsp;</p>
<p>&nbsp; </p>
</body>
</html>
