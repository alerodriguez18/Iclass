<?php
session_start();
?>
<html>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:317px;
	height:196px;
	z-index:1;
	left: 444px;
	top: 113px;
		border:solid 1px #ddd;
-moz-box-shadow:7px 8px 2px #333;
-webkit-box-shadow:7px 8px 2px #333;
box-shadow:7px 8px 2px #333;
text-align:center;
}
#Layer2 {
	position:absolute;
	width:150px;
	height:133px;
	z-index:2;
	left: 197px;
	top: 144px;
			border:solid 1px #ddd;
-moz-box-shadow:7px 8px 2px #333;
-webkit-box-shadow:7px 8px 2px #333;
box-shadow:7px 8px 2px #333;
text-align:center;
}
#Layer3 {
	position:absolute;
	width:500px;
	height:70px;
	z-index:3;
	left: 238px;
	top: 22px;
	color:#FFFFFF;
				border:solid 1px #ddd;
-moz-box-shadow:7px 8px 2px #333;
-webkit-box-shadow:7px 8px 2px #333;
box-shadow:7px 8px 2px #333;
text-align:center;
}
.Estilo1 {font-size: 36px}
#Layer4 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:4;
	left: 614px;
	top: 378px;
}
#Layer5 {
	position:absolute;
	width:126px;
	height:204px;
	z-index:4;
	left: 34px;
	top: 25px;
}
#Layer6 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:4;
	left: 551px;
	top: 379px;
}
-->
</style>
<body  bgcolor="2c4762">
<div class="Estilo1" id="Layer3">TU INFORMACI&Oacute;N 
<hr></div>
<div id="Layer1">
<hr>
   <?php
   $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
  $sql1="Select * from usuarios where usuario='".$_SESSION["usuario"]."'"; 
  $resultado1=mysql_query($sql1,$conexion) or die ("Error al ejecutar la sentencia SQL");
    while ($row1 = mysql_fetch_row($resultado1)){
	echo "<font color=#FFFFFF>NOMBRE: $row1[0]</font><br><br>";
    echo "<font color=#FFFFFF>APELLIDOS:  $row1[1]</font><br><br>";
    echo "<font color=#FFFFFF>USUARIO:  $row1[2]</font><br><br>";
    echo "<font color=#FFFFFF>CORREO ELECTORNICO:  $row1[4]</font><br><br>";
}
?>
</div>

<div id="Layer2">
   <?php
 $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
  $sql="Select * from usuarios where usuario='".$_SESSION["usuario"]."'"; 
  $resultado=mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL");
    while ($row = mysql_fetch_row($resultado)){
    $imagen=$foto['foto'];
	  echo "<img src='$row[5]' width='150' height='150'  ><br><br>";
}
?>
</div>

</body>
</html>