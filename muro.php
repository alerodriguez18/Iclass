<?php
session_start();
if ($_REQUEST["idclase"]!="")
$_SESSION["idclase"]=$_REQUEST["idclase"];
?>
<html>
<head>
<meta http-equiv="Page-Enter" content="revealTrans(Duration=4, Transition=6)">
<style type="text/css">
#muro {	
border:solid 1px #ddd;
-moz-box-shadow:7px 8px 2px #333;
-webkit-box-shadow:7px 8px 2px #333;
box-shadow:5px 6px 1px #333;
}
</style>
</head>
<body bgcolor="2c4762">
<?php
  session_start();
  $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
 $sql1="Select comentario,foto,fecha,para,por from muro  where para='".$_SESSION["usuario"]."' ORDER BY idcomentario desc;";
 $resultado1=mysql_query($sql1,$conexion)or die("error");
   $sql2="Select nombre,apellidos from usuarios where usuario='".$_SESSION["usuario"]."';";
    $resultado2=mysql_query($sql2,$conexion)or die("error");
	$row2=mysql_fetch_array($resultado2);
echo "<div id=muro><center><font color=#FFFFFF size=+2>MURO DE $row2[0] $row2[1]</font></center></div><br>";
    $idusuario=$_SESSION["usuario"];
echo "<a href='publicarform.php?idusuario=$idusuario' target='menuprincipal'><center><font color=#FFFFFF>[PUBLICAR]</a></font></center><br>";
 
      while($row1=mysql_fetch_array($resultado1)){
	  if($row1[1]!="" && $row1[0]!=""){
	 echo "<center><img src='$row1[1]' width='150' height='150' width=150 height=150 ></center></a><br>";
      echo "<center><font color=#FFFFFF> $row1[0]</font><center><br>";
	  echo "<center><font color=#FFFFFF>Por: $row1[4]</font></center><br>";
          echo "<center><font color=#FFFFFF>El: $row1[2]</font></center>";
	  echo "<hr>";
	  }
	 else if($row1[1]!=""){
  echo "<center><img src='$row1[1]' width='150' height='150' width=150 height=150 ></center></a><br>";
  echo "<center><font color=#FFFFFF>Por: $row1[4]</font></center><br>";
  echo "<center><font color=#FFFFFF>El: $row1[2]</font></center>";
  echo "<hr>";
  	}
  	 else if($row1[0]!=""){
	  echo "<center><font color=#FFFFFF> $row1[0]</font><center><br>";
	  echo "<center><font color=#FFFFFF>Por: $row1[4]</font></center><br>";
         echo "<center><font color=#FFFFFF>El: $row1[2]</font></center>";
	  echo "<hr>";
	  }
	
	  }
    mysql_close($conexion);
		  ?>
 </body>
</html>