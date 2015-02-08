<?php
session_start();

	   ?>
<html>
<body bgcolor="2c4762" >
 

<?php
$nombre=$_POST["nombreclase"];
$caracteres="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstvwxyz1234567890";
$numerodeletras=10;
$id="";
for($i=0;$i<$numerodeletras;$i++)
{
  $id.=substr($caracteres,rand(0,strlen($caracteres)),1);
}
 $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
  $sql="Insert into clases(idclase,nomclase)values('$id','$nombre');";
mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL clase");
  //$sql="select max(idclase) AS id from clases";
	 //$resultado1=mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL maxclase");
	 //if ($row = mysql_fetch_row($resultado1)){
//$id = trim($row[0]);
//}	
	$sql3="Insert into usuarioclases values('".$_SESSION['usuario']."','$id','A');";
  mysql_query($sql3,$conexion) or die ("Error al ejecutar la sentencia insert usuarioclase");
 $sql2="Select nomclase from clases where idclase='$id'";	 
$resultado2=mysql_query($sql2,$conexion) or die ("Error al ejecutar la sentencia SQL select nomclase");
$row4=mysql_fetch_array($resultado2);
 $sql4="Select correo from usuarios where usuario='".$_SESSION['usuario']."';";
$resultado3=mysql_query($sql4,$conexion) or die ("Error al ejecutar la sentencia SQL select CORREO");
$row3=mysql_fetch_array($resultado3);
$destino=$row3[0];	
$asunto="Creacion de Clase";
$mensaje='
<html ">
<head>
</head>

<body>
 <table width="400" border="0" bgcolor="#2c4762">
    <tr>
      <th width="172" bordercolor="#FFFFFF" scope="col"><p class="Estilo3"><Font color="#FFFFFF">Haz creado la clase:'.$row4[0].'</Font></p>
      <th width="218" scope="col"><p class="Estilo3"><Font color="#FFFFFF">Con la clave:'.$id.'</Font></p>
      <p><span class="Estilo3"><Font color="#FFFFFF">Muchas gracias por crear la clase</span></Font></p>      </th>
    </tr>
  </table>
</body>
</html>

';
$cabecera="MIME-Version: 1.0\r\n";
$cabecera.="Content-type: text/html; charset=iso-8859-1\r\n";
$cabecera.="From: ICLASS.INC <iclassupvm@gmail.com>\r\n";
 echo " <font color=FFFFFF><center><h10>NUEVA CLASE CREADA<h10></center></font>";
	 echo "<hr> <br>";
    while ($row1 = mysql_fetch_array($resultado2)){
  	echo "<font color=FFFFFF>NOMBRE DE LA CLASE : $row1[0]</font>";
	}
	echo "<br>";
	echo "<font color=FFFFFF>LLAVE DE LA CLASE : $id</font>";
	echo "<br>";
	echo "<font color=FFFFFF>Hola ".$_SESSION["usuario"]." tu como administrador de la clase gozas de diversos privilegios. Para que se unan alumnos a tu clase</font>";
	echo "<br>";
	echo "<font color=FFFFFF>Solo tienes que proporcionarles la llave de la clase y con ella se podran unir, Desde este momento puedes crear tu plan de estudios</font>";
	if(mail($destino,$asunto,$mensaje,$cabecera)){
echo "<script>alert('SE TE HA ENVIADO UN CORREO A TU E-MAIL CON LA CLAVE Y NOMBRE DE LA MATERIA')</script>";
}else{
        echo "no enviado";}
	?>
</body>
</html>

