<?php
session_start();
if ($_REQUEST["idclase"]!="")
	   $_SESSION["idclase"]=$_REQUEST["idclase"];
if ($_REQUEST["idtarea"]!="")
	   $_SESSION["idtarea"]=$_REQUEST["idtarea"];

//echo  $_SESSION["idtarea"];
$idtarea=$_SESSION["idtarea"];
?>

<html>
<head>
<script src="tinymce/js/tinymce/tinymce.min.js">
</script>
<script >
tinymce.init({
selector: 'textarea'});
</script>
</head>

<body  bgcolor="2c4762">

<p>
  <?php

   $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
  $sql="select idtarea,titulo from tareas where idclase='".$_SESSION["idclase"]."' and idtarea=".$idtarea.";";  
  $resultado=mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL select de tareas ".$idtarea);
  //echo "<center><a href='formtarea.html'><font color=FFFFFF>Subir nueva tarea</font></a></center><br>";
  $row = mysql_fetch_row($resultado);
              $_SESSION["idtarea"]=idtarea;
  	echo "<form method=post action=nuevareplica.php?idtarea=$row[0]>";
	 echo "<input type=text name=titulo value='RE: $row[1]'> <br>";
      echo "<textarea name=descripcion cols=50 rows=10></textarea>";
	  echo "<input type=submit value='Nueva Replica'>";
	  echo "</form>";
?></p>
</body>
</html>
