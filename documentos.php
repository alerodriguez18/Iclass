<?php 
session_start();
echo "<html>";
echo "<body bgcolor=#2c4762>"; 
 $id_conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die ("Error de conexion de base de datos"); 
  mysql_select_db("a8187156_rsa", $id_conexion) or die ("Error no sirve");
$qry = "SELECT id, nombre, titulo, tipo FROM archivo where idclase='".$_SESSION["idclase"]."'";
$res = mysql_query($qry); 
    echo "<center><h1><font color=#FFFFFF>DOCUMENTOS</font></h1><a href=alta.html><font color=#FFFFFF><i>[SUBIR ARCHIVO]</i></font></a></center><br><br>";
	//echo "<center><a href=alta.html><font color=#FFFFFF>[SUBIR ARCHIVO]</font></a></center><br><br>";
while($fila = mysql_fetch_array($res)) 
{ 
echo "<center></center>";
echo "<center><font color=FFFFFF><li><font color=FFFFFF>$fila[titulo]</font></center>"; 
echo "<center><font color=FFFFFF>$fila[nombre]</font></center>";  
echo "<center><a href='descargar_archivo.php?id=$fila[id]'><font color='FFFFFF'>Descargar</font></a></center>"; 
echo "<center><HR width=20% align='center'></ceneter>";
} 
echo "</body>";
echo "</html>";
?>

