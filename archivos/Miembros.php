<?php
session_start();
if ($_REQUEST["idclase"]!="")
	   $_SESSION["idclase"]=$_REQUEST["idclase"];
?>
<html>
<head>
<meta http-equiv="Page-Enter" content="revealTrans(Duration=4, Transition=6)">
</head>
<body bgcolor="2c4762">
<?php
  session_start();
  $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
 $sql1="Select nombre,apellidos,correo,foto,usuarioclases.usuario,usuarios.usuario from usuarios,usuarioclases where usuarioclases.usuario=usuarios.usuario and usuarioclases.idclase='".$_SESSION["idclase"]."';";
 $resultado1=mysql_query($sql1,$conexion)or die("error");
 
      while($row1=mysql_fetch_array($resultado1)){
	
  echo "<a href=informacionindividual.php?idusuario=$row1[4]><center><img src='$row1[3]' width='150' height='150' onmouseover=this.width=200;this.height=200; onmouseout=this.width=150;this.height=150; width=150 height=150 ></center></a> <center><font color=#FFFFFF>$row1[0] $row1[1]</font></center>  ";
	  //echo "$row1[0]<br>";
	  //echo "$row1[1]<br>"
	  echo "<center><font color=#FFFFFF> $row1[2]</font><center>";
	  echo "<font color=#FFFFFF>$row1[4]</font><br>";
            $idusuario=$row1[4];
	echo "<a href='publicarform.php?idusuario=$row1[4]' target='menuprincipal'><center><font color=#FFFFFF>[PUBLICAR EN SU MURO]</a></font></center><br>";
	  echo "<hr>";
	  
	  }
        
            
       
    mysql_close($conexion);
		  ?>
		  </body>
		  </html>