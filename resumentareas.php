<?php
session_start();
if ($_REQUEST["idclase"]!="")
	   $_SESSION["idclase"]=$_REQUEST["idclase"];
	   if ($_REQUEST["idplaneacion"]!="")
	  $_SESSION['idplaneacion']=$_REQUEST['idplaneacion'];
	 // echo $_SESSION['idplaneacion'];
    //echo $idplaneacion;
	  
?>
<style type="text/css">
#nom {
	position:absolute;
	width:950px;
	height:26px;
	z-index:3;
	color:#FFFFFF;
			border:solid 1px #ddd;
-moz-box-shadow:7px 8px 2px #333;
-webkit-box-shadow:7px 8px 2px #333;
box-shadow:7px 8px 2px #333;
}
</style>
<html>
<head>

</head>

<body  bgcolor="2c4762">

<?php
   $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
$sql1="select nomclase from clases where idclase='".$_SESSION["idclase"]."'";
   $sql2="select nombreactividad from planeacion where idplaneacion=".$_SESSION["idplaneacion"].";";
   $result=mysql_query($sql1,$conexion) or die ("Error al ejecutar la sentencia SQL");
   $result2=mysql_query($sql2,$conexion);
   $row6=mysql_fetch_array($result2);
  while ($row=mysql_fetch_array($result))
   {	
		echo "<div id=nom>PLANEACIÓN DE LA CLASE<font color=#00FFFF size=+2>---></font>$row[0]<font color=#00FFFF size=+2>---></font>RESUMEN TAREAS DE TEMA<font color=#00FFFF size=+2>---></font>$row6[0]</div>";
   }
   $sql="select idtarea,idplaneacion,titulo,fecha,usuario from tareas where idclase='".$_SESSION["idclase"]."' and idplaneacion=".$_SESSION["idplaneacion"].";";
  $resultado=mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL");

	
	echo $titulo;
        echo "<br><br>";
    while ($row = mysql_fetch_row($resultado)){
	
	     $_SESSION["idtarea"]=idtarea;
	 echo "<a href=muestraclase.php?idtarea=$row[0]><font color=FFFFFF><li>$row[2]</li></font> </a>";
      echo "<font color=FFFFFF> $row[3]</font> ";
	   echo "<font color=FFFFFF> $row[4]</font>";
    
	  echo "<hr>";
	
}

?>
</body>
</html>
