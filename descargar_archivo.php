<?
session_start();
$id_conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die ("Error de conexion de base de datos"); 
  mysql_select_db("a8187156_rsa", $id_conexion) or die ("Error no sirve");
  $extenciones = array("application/msword"=>"doc","application/pdf"=>"pdf","image/jpeg"=>"jpg", "application/rar"=>"rar");
$id = $_GET['id']; 
$qry = "SELECT tipo, contenido, nombre FROM archivo WHERE id=$id";
$res = mysql_query($qry);
$tipo = mysql_result($res, 0, "tipo");
$contenido = mysql_result($res, 0, "contenido");
$nombre = mysql_result($res, 0, "nombre");
	//$fila[nombre] ($fila[tipo])
	header("Content-type: $tipo"); 
    header('Content-disposition: attachment; filename="'.$nombre.'"'); 
    echo $contenido; 
?>
