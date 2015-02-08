<?
	session_start();
	if ($_REQUEST["idclase"]!="")
	   $_SESSION["idclase"]=$_REQUEST["idclase"];
	 $_REQUEST["idclase"]="";
	
	?>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:215px;
	height:38px;
	z-index:1;
	left: 28px;
	top: 15px;
	color= #FFFFFF;
	font-size= 14px;
}

#Layer2 {
	position:absolute;
	width:555px;
	height:222px;
	z-index:2;
	left: 95px;
	top: 96px;
	font-size: 14px;
	color:#FFFFFF;
    
}
#nom {
	position:absolute;
	width:500px;
	height:26px;
	z-index:3;
	color:#FFFFFF;
			border:solid 1px #ddd;
-moz-box-shadow:7px 8px 2px #333;
-webkit-box-shadow:7px 8px 2px #333;
box-shadow:7px 8px 2px #333;
}
#Layer3 {
	position:absolute;
	width:190px;
	height:26px;
	z-index:3;
	left: 244px;
	top: 45px;
	color:#FFFFFF;
}
.Estilo2 {color: #FFFFFF; font-size: 14px; }
.Estilo3 {color: #FFFFFF}
-->
</style>

<body style="background-color:#2c4762" Color="#FFFFFF">
<form name="form1" method="post" action="consigueactividad.php">
<div id="Layer1"><span class="Estilo1 Estilo3"> <?php
 $id_conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die ("Error de conexion de base de datos"); 
  mysql_select_db("a8187156_rsa", $id_conexion) or die ("Error no sirve");
   $sql="select nomclase from clases where idclase='".$_SESSION["idclase"]."'";
   $result=mysql_query($sql,$id_conexion) or die ("Error al ejecutar la sentencia SQL");
  while ($row=mysql_fetch_array($result))
   {	
		echo "<div id=nom>PLANEACIÓN DE LA CLASE<font color=#00FFFF>---></font>$row[0]</div>";
   }
       $sql1="select * from usuarioclases where usuario='".$_SESSION["usuario"]."'and idclase='".$_SESSION["idclase"]."'";
	 $result1=mysql_query($sql1,$id_conexion) or die ("Error al ejecutar la sentencia SQL");
	 while ($row1=mysql_fetch_array($result1))
   {	
		if($row1[2]=="A"){
echo "<div class='Estilo1' id='Layer3'> <a href='Planeaciondeclase.html' target='menuprincipal' class='Estilo2'><br>Nueva Actividad</a><br></div>";
}else{
 
}
   }
 ?> </span></div>
 <div id="Layer4" style="position:absolute; left:680; top:10">
  <?php 
      $sql1="select * from usuarioclases where usuario='".$_SESSION["usuario"]."'and idclase='".$_SESSION["idclase"]."'";
	 $result1=mysql_query($sql1,$id_conexion) or die ("Error al ejecutar la sentencia SQL");
	 while ($row1=mysql_fetch_array($result1))
   {	
		//echo $row1[2];
		if($row1[2]=="A"){
echo "<font color=FFFFFF> PERFIL:ADMIN</font>";
}else{
   echo "<font color=FFFFFF>PERFIL:USUARIO</font>";
}
   }
 ?>
 </div>
 

<br>
<br>
<hr>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="Layer2" style="color:#FFFFFF">
	<?php
  $nombreactividad=$_POST["nombreactividad"];
  $fecha=$_POST["fecha"];
  $descripcion=$_POST["Descripcion"];
 // $_SESSION["idclas"]=$registro["idclase"];
  //echo $_SESSION["idclase"];
  
$id_conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die ("Error de conexion de base de datos"); 
  mysql_select_db("a8187156_rsa", $id_conexion) or die ("Error no sirve");
  $sql="select idplaneacion,nombreactividad,fecha,descripcion from planeacion where idclase='".$_SESSION["idclase"]."'order by idplaneacion desc ;";
   $result=mysql_query($sql,$id_conexion) or die ("Error al ejecutar la sentencia SQL");
  while ($row=mysql_fetch_array($result))
  {	
  
	//$_SESSION['idplaneacion']=$row['idplaneacion'];
		echo "<table rules=rows>";
	echo "<tr>\n";
  	//echo "<a href=tema.php <td><font color=#FFFFFF>".$row["nombreactividad"]." </font></td></a> \n";
	echo "TEMA:   ";
	echo "<a href=tema.php?idplaneacion=$row[0]><font color=FFFFFF>$row[1]</font> </a><br>";
	echo "</tr> \n";
	echo "<tr> \n";
	echo "<td><font color=FFFFFF>FECHA DE ENTREGA: ".$row["fecha"]."</font></td> \n";
	echo "</tr> \n";
	echo "<tr> \n";
	echo "<td><font color=FFFFFF> DESCRIPCION DE LA ACTIVIDAD: ".$row["descripcion"]."</font></td> \n";
	echo "</tr> \n";
	echo "<hr width=50% align=\"left\">";
	echo "</table>";
	 echo "</table>";
	 echo "<hr>";
	}
	  ?>
  <p>&nbsp;</p>
</div>
<p>&nbsp;</p>
</body>
</html>
