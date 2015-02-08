<?php
     session_start();
	$usuario = $_POST['username'];
	//$matricula=$_POST[$_SESSION["matricula"]];
	
   $con=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$con) or die("Error en la base de datos");
	$sql="select * from planeacion ORDER BY idplaneacion desc";
	$datos=mysql_query($sql,$con);
	while($reg=mysql_fetch_array($datos))
	{
		$resultado[]=array("nombreactividad"=>$reg["nombreactividad"]);
		$resultado[]=array("fecha"=>$reg["fecha"]);
		$resultado[]=array("descripcion"=>$reg["descripcion"]);
	}
	
	echo json_encode($resultado);
	mysql_free_result($datos);
	mysql_close($con);
?>