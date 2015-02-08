<?php
session_start();

  $mensaje=$_POST["comentario"];
  $usuario2=$_POST["para"];
    $foto=$_POST["foto"];
  $ruta="foto";
  $archivo=$_FILES['foto']['tmp_name'];
  $nombrearchivo=$_FILES['foto']['name'];
  move_uploaded_file($archivo,$ruta."/".$nombrearchivo);  
  $ruta=$ruta."/".$nombrearchivo;
	$red="Publicacion correcta";
 	$fecha=date('Y-m-d');
 
 $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
  $com=strcmp($ruta,"foto/");
 if($com ==0 && $mensaje !="")
  {
  $sql="Insert into muro(comentario,fecha,para,por,idclase) values ('$mensaje','$fecha','$usuario2','".$_SESSION['usuario']."','".$_SESSION['idclase']."');";
  mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL INSERT COMENTARIO 1");
  }else{
  $sql="Insert into muro(comentario,foto,fecha,para,por,idclase) values ('$mensaje','$ruta','$fecha','$usuario2','".$_SESSION['usuario']."','".$_SESSION['idclase']."');";
  mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL INSERT COMENTARIO".$_SESSION['usuario']);
  } echo "<script>alert('Publicacion correcta')</script>"; 
  $com=strcmp($red,"Publicacion correcta");
 if($red==0)
  {print "<meta http-equiv=Refresh content=\"0 ; url=Miembros.php\">"; }	
  ?>

