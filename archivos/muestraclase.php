<?php
session_start();
if ($_REQUEST["idclase"]!="")
	   $_SESSION["idclase"]=$_REQUEST["idclase"];
	   if ($_REQUEST["idtarea"]!="")
	   $_SESSION['idtarea']=$_REQUEST['idtarea'];
	  //echo $_SESSION['idtarea'];
    //echo $idtarea;
	  
?>

<html>
<head>

</head>

<body  bgcolor="2c4762">

<?php
$conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
 // $sql="Select titulo,mensaje,usuario from tareas where idclase='".$_SESSION["idclase"]."' and tareas.idplaneacion='".$_SESSION['idplaneacion']."'";
  // $sql="select titulo,mensaje,usuario from tareas where idclase='".$_SESSION['idclase']."'"; 
   $sql="select idtarea,titulo,fecha,mensaje,usuario from tareas where idclase='".$_SESSION["idclase"]."' and idtarea=".$_SESSION["idtarea"].";";
  $resultado=mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL");
  
   // echo "<a href=formtarea.php?idplaneacion=$idplaneacion><font color=FFFFFF><center>Nueva tarea</center></font></a>";
	echo $titulo;
    while ($row = mysql_fetch_row($resultado)){
	
	 // echo "<a href=tema.php?idplaneacion=$row[0]><font color=FFFFFF><center>$row[1]</center></font> </a><br>";
	 //echo " <font color=FFFFFF> $row[0]</font> <br>";
	 echo " <font color=FFFFFF>TITULO:    $row[1]</font> </a><br><br>";
      echo "<font color=FFFFFF>FECHA:     $row[2]</font> <br><br>";
	   echo "<font color=FFFFFF>DESCIRPCION:     $row[3]</font> <br>";
	     echo "<font color=FFFFFF>POR:      $row[4]</font> <br>";
      //echo " &nbsp;&nbsp;&nbsp;<i><font color=FFFFFF>POR: $row[4]</font> </i><br>";
	  echo "<hr>";
	 //$_SESSION['idplaneacion']="";
}

?>
</body>
</html>
