<?php
     session_start();
	$usuario = $_POST['username'];
	//$matricula=$_POST[$_SESSION["matricula"]];
	
    $con=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$con) or die("Error en la base de datos");
	$sql="select materias.nombre, calificacion from calificaciones,materias where matricula='$usuario' and materias.clave=calificaciones.claveMateria";
	$sql1="select nombre,apellidoPaterno from alumnos where matricula='$usuario'";
	$datos=mysql_query($sql,$con);
	while($reg=mysql_fetch_array($datos))
	{
		$resultado[]=array("materia"=>$reg["nombre"]);
		$resultado[]=array("calificacion"=>$reg["calificacion"]);
	}
	
	$datos1=mysql_query($sql1,$con);
	while($reg1=mysql_fetch_array($datos1))
	{
		$resultado[]=array("nombre"=>$reg1["nombre"]);
		$resultado[]=array("apellidoPaterno"=>$reg1["apellidoPaterno"]);
	}
	echo json_encode($resultado);
	mysql_free_result($datos);
	mysql_close($con);
?>