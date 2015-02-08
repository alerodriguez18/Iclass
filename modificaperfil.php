<?
  session_start();
  $_SESSION["usuario"]=$_REQUEST["usuario"];
  $_SESSION["contrasena"]=$_REQUEST["contrasena"];
  $nombre=$_POST["nom"];
  $app=$_POST["app"];
  $usuario=$_POST["usuario"];
  $correo=$_POST["correo"];
  $red="TAREA ACTUALIZADA CORRECTAMENTE";
   $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
  $sql="Update usuarios set nombre='$nombre',apellidos='$app',usuario='$usuario',correo='$correo' where usuario='".$_SESSION['usuario']."';";
  mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL ");
  echo "<script>alert('La creacion se a consumado')</script>"; 
  $com=strcmp($red,"TAREA ACTUALIZADA CORRECTAMENTE");
  if($red==0)
  {print"<meta http-equiv='Refresh' content=\"0; url=Principal1.php.\">"; }
  ?>