<?php
	session_start();
	//$_SESSION["usuario"]=$_REQUEST["usuario"];
  //$_SESSION["contrasena"]=$_REQUEST["contrasena"];
	?>
<html>
<head>
<meta http-equiv="Page-Enter" content="revealTrans(Duration=4, Transition=6)">
  <SCRIPT LANGUAGE="JavaScript" runat="server">
    function seleccionaClase(menuprincipal)
	{
	  window.parent.frames["contenido"].location.href = menuprincipal.options[menuprincipal.selectedIndex].value; 
	  window.parent.frames["encabezado"].location.href="encabezado.php";
	}
</script>
</script>
<style type="text/css">
<!--
.Estilo2 {color: #FFFFFF}
-->
</style>
</head>
<body>

<div id="menu" style="background-color:#2c4762 ;height:550px; width:200px;" >
  <p align="center">
    <style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:1147px;
	height:153px;
	z-index:1;
	left: 212px;
	top: 8px;
	color:#FFFFFF;
	font-size:50px;
}
.Estilo2 {color: #FFFFFF; font-size: 14px; }

body{
 background-image: url(Imuro.jpg);
    background-repeat: repeat;
}
#Layer2 {
	position:absolute;
	width:1147px;
	height:406px;
	z-index:2;
	left: 213px;
	top: 166px;
}
#Layer3 {
	position:absolute;
	width:186px;
	height:39px;
	z-index:3;
	left: 774px;
	top: 37px;
	color: #FFFFFF;
	font-size: 14px;
				border:solid 1px #ddd;
-moz-box-shadow:7px 8px 2px #333;
-webkit-box-shadow:7px 8px 2px #333;
box-shadow:5px 6px 1px #333;
}
#Layer4 {
	position:absolute;
	width:157px;
	height:109px;
	z-index:3;
	left: 966px;
	top: 8px;
		border:solid 1px #ddd;
-moz-box-shadow:7px 8px 2px #333;
-webkit-box-shadow:7px 8px 2px #333;
box-shadow:7px 8px 2px #333;
}
#Layer5 {
	position:absolute;
	width:1322px;
	height:171px;
	z-index:3;
	left: 9px;
	top: 567px;
}
.Estilo3 {color: #FFFFFF}
#Layer6 {
	position:absolute;
	width:450px;
	height:70px;
	z-index:2;
	left: 208px;
	top: 26px;
	font-size:25px;
	border:solid 1px #ddd;
-moz-box-shadow:7px 8px 2px #333;
-webkit-box-shadow:7px 8px 2px #333;
box-shadow:7px 8px 2px #333;
text-align:center;

}
#Layer7 {
	position:absolute;
	width:1349px;
	height:176px;
	z-index:3;
	top: 552px;
}
#Layer8 {
	position:absolute;
	width:150px;
	height:150px;
	z-index:4;
	left: 15px;
	top: -7px;
border:solid 1px #ddd;
-moz-box-shadow:7px 8px 2px #333;
-webkit-box-shadow:7px 8px 2px #333;
box-shadow:7px 8px 2px #333;

}
#Layer9 {
	position:absolute;
	width:197px;
	height:23px;
	z-index:4;
	left: 8px;
	top: 182px;
			border:solid 1px #ddd;
-moz-box-shadow:7px 8px 2px #333;
-webkit-box-shadow:7px 8px 2px #333;
box-shadow:5px 6px 1px #333;
}
#Layer10 {
	position:absolute;
	width:183px;
	height:19px;
	z-index:5;
	left: 15px;
	top: 16px;
			border:solid 1px #ddd;
-moz-box-shadow:7px 8px 2px #333;
-webkit-box-shadow:7px 8px 2px #333;
box-shadow:5px 6px 1px #333;
}
#Layer11 {
	position:absolute;
	width:179px;
	height:40px;
	z-index:6;
	left: 16px;
	top: 298px;
				border:solid 1px #ddd;
-moz-box-shadow:7px 8px 2px #333;
-webkit-box-shadow:7px 8px 2px #333;
box-shadow:5px 6px 1px #333;
}
-->
    </style>
  </p>
  <p align="center"><a href="P2.php" target="menuprincipal" class="Estilo2">Inicio</a><br>
    <a href="temas.php" target="menuprincipal" class="Estilo2">Temas</a><br>
    <a href="Ligas.php" target="menuprincipal" class="Estilo2">Ligas</a><br>
    <a href="documentos.php" target="menuprincipal" class="Estilo2">Documentos</a></p>
  <p align="center"><a href="Planeacion1.php" target="menuprincipal" class="Estilo2">Planeacion</a><br>
    <a href="Miembros.php" target="menuprincipal" class="Estilo2">Miembros de la Clase</a></p>
   <div align="center"><a href="muro.php" target="menuprincipal" class="Estilo2">[MURO]</a></div>

 
  <hr align="center">
  <div id="face">
    <center>
      <a href="http://www.facebook.com/IclassUpvm" target="_blank"><img src="images/images (1).jpg" alt="face" width="145" height="71" border="0"></a>
    </center>
  </div>
  <div class="Estilo2">
    <center>
      VISITANOS EN FACEBOOK
    </center>
  </div>
  <hr>
  <div id="Layer11" >
    <p align="center" class="Estilo3">CLASES</p>
  </div>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div align="center">
    <p><a href="unirse1.html" target="menuprincipal" class="Estilo2">Unirse a Clase</a><br>
        <a href="crearclase.html" target="menuprincipal" class="Estilo2">Crear Clase</a><br>
        <a href="editarperfil.php" target="menuprincipal" class="Estilo2">Editar Perfil de Usuario</a><br>
    </p>
  </div>
  <hr align="center">
<div align="center">
  <?php
   $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
   //$sql="Select * from clases;";
    $sql="Select * from clases,usuarioclases where clases.idclase=usuarioclases.idclase and usuario='".$_SESSION["usuario"]."' ";
   $recordSet=mysql_query($sql,$conexion) or die("Error en la sentencia SQL");
   $reg=mysql_fetch_array($recordSet);
   $_SESSION["idclase"]=$reg["idclase"];
   $recordSet=mysql_query($sql,$conexion) or die("Error en la sentencia SQL");
   echo "<SELECT NAME=menuprincipal SIZE=1 onChange = "."document.getElementById('menuprincipal').src=this.value".">";  
   echo "<font size=1>";
   while ($registro=mysql_fetch_array($recordSet))
   {	
	 echo "<option value=Planeacion1.php?idclase=".$registro["idclase"].">".$registro["nomclase"]."</option>";
    
   }
   echo "</font>";
   echo "</select>";
   mysql_free_result($recordSet);
?>
  <br>
  <br>
   <a href='salir.php' class=Estilo2>LOG OUT</a></center>
 
  
</div>
</div>

<div id="Layer1">
  <div id="div2"  height:150px; width:1145px;" ><img src="Encabezado.jpg" width="1148" height="155" />
    <div id="Layer8" >
    
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
    <br>
 <div id="Layer3">
	<!-- #BeginDate format:fcAm1m -->Mi&eacute;rcoles, Julio 24, 2013  3:24<!-- #EndDate -->
	</div>
    <div id="Layer4"><img src="Logo.jpg" width="157" height="110" /></div>
    <a href='informacion.php' target="menuprincipal">

	<div id="Layer6" alt=textoalternativo title='INFORMACION' onmouseover=this.width=200;this.height=200; onmouseout=this.width=150;this.height=150; width=150 height=150>
      <?php
 
 
 
  $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
  $sql="Select * from usuarios where usuario='".$_SESSION["usuario"]."'"; 
  
  $resultado=mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL");
    
    while ($row = mysql_fetch_row($resultado)){
	
     echo "<font color=#FFFFFF>$row[0]&nbsp;</font>";
      
      echo "<font color=#FFFFFF>$row[1]</font>";
}
		  ?>
   </div>
   
    </a>

  </div>  
</div>

<div id="Layer2">
<iframe id="menuprincipal" frameborder="1" width="1137" height="400" src="muro.php"></iframe>
</div>
<br>
<div id="Layer7"><img src="Encabezado.jpg" width="1350" height="175" /></div>
</body>

</html>
