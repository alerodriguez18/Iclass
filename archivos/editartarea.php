<?php
session_start();
if ($_REQUEST["idclase"]!="")
	   $_SESSION["idclase"]=$_REQUEST["idclase"];


if ($_REQUEST["idtarea"]!="")
	   $_SESSION["idtarea"]=$_REQUEST["idtarea"];

//echo $_SESSION["idtarea"];
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

<?php
  $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
   $sql="select idtarea,idplaneacion,titulo,mensaje,usuario from tareas where idclase='".$_SESSION['idclase']."' and idtarea=".$_SESSION["idtarea"].";";
  $resultado=mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL");
     $row = mysql_fetch_row($resultado);
              $idtarea=$_SESSION["idtarea"];
  	echo "<form method=post action=modificatarea.php?idtarea=$idtarea>";
	 echo "<font color=FFFFFF>TITULO: </font>";
	 echo "<input type=text name=titulo value=".$row[2]."> <br><br>";
	 echo "<font color=FFFFFF>DESCRIPCION: </font><br>";
      echo "<textarea name=descripcion cols=5 rows=5 value=".$row[3]."></textarea>";
	  echo "<input type=submit value=modifica>";
	  echo "</form>";
?>
</body>
</html>
