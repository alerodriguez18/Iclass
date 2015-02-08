
<?php
    	session_start(); 
 $usuario=$_POST["usuario"];
 $contrasena=$_POST["contrasena"];
 $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
$sql="Select * from usuarios where usuario='".$usuario."' and contrasena='".$contrasena."'";
//echo "$sql";
$recordSet=mysql_query($sql,$conexion) or die("Error en la sentencia SQL");
$reg=mysql_fetch_array($recordSet);
$usuario=$reg["usuario"];
$usuarioFirmado=$reg["usuario"];
$contrasena=$reg["contrasena"];
mysql_close($conexion);  
$registro=mysql_fetch_array($recordSet);
$num=mysql_num_rows($recordSet);
if($num==1)
{
     $_SESSION['usuario']=$_REQUEST['usuario'];
	 $_SESSION['contrasena']=$_REQUEST['contrasena'];
header("location:Principal1.php");
}
else{

header("location:index.php");
 $com=strcmp($red,"CONTRASEÑA O USUARIO INCORRECTO");
}
?>