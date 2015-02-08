<?php
$usuario = $_POST['username'];
$passw = $_POST['contrasena'];

require_once 'funciones_bd.php';
$db = new funciones_BD();

	$reg=$db->login($usuario,$passw);
	if($reg[2])
	{
	    
	        $resultado[]=array("logstatus"=>"1");
		$resultado[]=array("perfil"=>"$reg[2]");
	
	}
	else
	{
		$resultado[]=array("logstatus"=>"0");
		$resultado[]=array("perfil"=>"invalido");
	   
	}
echo json_encode($resultado);	
?>
