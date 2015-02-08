<?php
     session_start();
	$usuario = $_POST['username'];
	//$matricula=$_POST[$_SESSION["matricula"]];
	
    $con=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$con) or die("Error en la base de datos");
	$sql="select nombre,apellidoPaterno,apellidoMaterno,matricula from usuarios";
	$datos=mysql_query($sql,$con);
	while($reg=mysql_fetch_array($datos))
	{
		$resultado[]=array("nombre"=>$reg["nombre"]);
		$resultado[]=array("apellidoPaterno"=>$reg["apellidoPaterno"]);
		$resultado[]=array("apellidoMaterno"=>$reg["apellidoMaterno"]);
	    $resultado[]=array("matricula"=>$reg["matricula"]);
	}
	
	echo json_encode($resultado);
	mysql_free_result($datos);
	mysql_close($con);
	?>