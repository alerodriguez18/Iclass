<?php
session_start();
?>

<html>
<head>
</head>

<body  bgcolor="2c4762">

<?php
   $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
   $sql1="Select * from usuarios where usuario='".$_SESSION["usuario"]."'"; 
  $resultado1=mysql_query($sql1,$conexion) or die ("Error al ejecutar la sentencia SQL");
	$row = mysql_fetch_row($resultado1);	
  	echo "<form method=post action=modificaperfil.php>";
	 echo "<font color=FFFFFF>NOMBRE: </font>";
	 echo "<input type=text name=nom value=".$row[0]."> <br><br>";
	 echo "<font color=FFFFFF>APELLIDOS: </font>";
	 echo "<input type=text name=app value=".$row[1]."> <br><br>";
	 echo "<font color=FFFFFF>USUARIO: </font>";
	 echo "<input type=text name=usuario value=".$row[2]."> <br><br>";
	 echo "<font color=FFFFFF>CORREO: </font>";
	 echo "<input type=text name=correo value=".$row[4]."> <br><br>";
	  echo "<input type=submit value=modifica>";
	  echo "</form>";
?>
</body>
</html>