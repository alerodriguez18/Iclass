<?php
	session_start();
	
  $nombre=$_POST["nombreclase"];
  $red="La creacion se a consumado";
  $id_conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die ("Error de conexion de base de datos"); 
  mysql_select_db("a8187156_rsa", $id_conexion) or die ("Error no sirve");
  $sql="Insert into clases(nomclase)values('$nombre');";
  mysql_query($sql,$id_conexion) or die ("Error al ejecutar la sentencia SQL clase");
  echo "<script>alert('La creacion se a consumado')</script>"; 
  $com=strcmp($red,"La creacion se a consumado");
 if($red==0)
  {print "<meta http-equiv=Refresh content=\"0 ; url=muestrac.php\">"; }	
?>