<?php
session_start();
if ($_REQUEST["idclase"]!="")
	   $_SESSION["idclase"]=$_REQUEST["idclase"];
?>
<html>
<body bgcolor="2c4762">
<?php
  $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
  $sql="Select idplaneacion,nombreactividad from planeacion where idclase='".$_SESSION["idclase"]."'"; 
  $resultado=mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL");
     echo " <font color=FFFFFF><center><h10>TODOS LOS TEMAS<h10></center></font>";
	 echo "<hr> <br>";
    while ($row = mysql_fetch_row($resultado)){
     $_SESSION["idplaneacion"]=idplaneacion;
	  echo "<a href=tema.php?idplaneacion=$row[0]><font color=FFFFFF><center><li>Tema :  $row[1]</center></font></a><br>";
	   //echo $row[0];
}
?>
 <div id="Layer4" style="position:absolute; left:680; top:10">
  <?php 
      $sql1="select * from usuarioclases where usuario='".$_SESSION["usuario"]."'and idclase='".$_SESSION["idclase"]."'";
	 $result1=mysql_query($sql1,$conexion) or die ("Error al ejecutar la sentencia SQL");
	 while ($row1=mysql_fetch_array($result1))
   {	
		//echo $row1[2];
		if($row1[2]=="A"){
echo "<font color=FFFFFF> PERFIL:ADMINISTRADOR</font>";
}else{
   echo "<font color=FFFFFF>PERFIL:USUARIO</font>";
}
   }
 ?>
 </div>
</body>
</html>	