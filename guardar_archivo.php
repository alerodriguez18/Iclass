<?php  
session_start();
$id_conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die ("Error de conexion de base de datos"); 
  mysql_select_db("a8187156_rsa", $id_conexion) or die ("Error no sirve");

$archivo = $_FILES["archivito"]["tmp_name"];  
$tamanio = $_FILES["archivito"]["size"]; 
$tipo    = $_FILES["archivito"]["type"]; 
$nombre  = $_FILES["archivito"]["name"]; 
$titulo  = $_POST["titulo"]; 

 if ( $archivo != "none" ) 
 { 
    $fp = fopen($archivo, "rb"); 
    $contenido = fread($fp, $tamanio); 
    $contenido = addslashes($contenido); 
    fclose($fp);  

    $qry = "INSERT INTO archivo VALUES  
            (0,'$nombre','$titulo','$contenido','$tipo','".$_SESSION['idclase']."')"; 

    mysql_query($qry); 

    if(mysql_affected_rows($id_conexion) > 0) { 
        print"<meta http-equiv='Refresh' content=\"0; url=documentos.php\">";
	}else 
       print "NO se ha podido guardar el archivo en la base de datos."; 
 } 
 else 
    print "No se ha podido subir el archivo al servidor"; 
?>
