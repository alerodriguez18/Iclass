<?
  session_start();
  if ($_REQUEST["idclase"]!="")
	   $_SESSION["idclase"]=$_REQUEST["idclase"];
	 $_REQUEST["idclase"]="";
  $nombreactividad=$_POST["nombreactividad"];
  $fecha=$_POST["fecha"];
  $descripcion=$_POST["Descripcion"];
  $red="ACTIVIDAD CREADA CORRECTAMENTE";
  $id_conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die ("Error de conexion de base de datos"); 
  mysql_select_db("a8187156_rsa", $id_conexion) or die ("Error no sirve");
 //$sql="Insert into planeacion values('$idplaneacion','$nombreactividad','$fecha','$descripcion','".$_SESSION["idclase"]."');";
  $sql="Insert into planeacion(nombreactividad,fecha,descripcion,idclase)values('$nombreactividad','$fecha','$descripcion','".$_SESSION["idclase"]."');";
  mysql_query($sql,$id_conexion) or die ("Error al ejecutar la sentencia SQL");
  echo "<script>alert('ACTIVIDAD CREADA CORRECTAMENTE')</script>"; 
  $com=strcmp($red,"ACTIVIDAD CREADA CORRECTAMENTE");
  if($red==0)
  {print "<meta http-equiv=Refresh content=\"0 ; url=Planeacion1.php\">"; }
  ?>