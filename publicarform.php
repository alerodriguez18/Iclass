<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="tinymce/js/tinymce/tinymce.min.js">

</script>
<script >
tinymce.init({
selector: 'textarea'});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>

<style type="text/css">
<!--
#para{
  resize:none;
}
#Layer1 {
	position:absolute;
	width:711px;
	height:580px;
	z-index:1;
	left: 166px;
	top: 50px;
}
#Layer2 {
	position:absolute;
	width:311px;
	height:28px;
	z-index:2;
	left: 59px;
	top: 13px;
}
.Estilo1 {color: #FFFFFF}
-->
</style>
</head>

<body  style="background-color:#2c4762" >
<link type="text/css" rel="stylesheet" href="dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>
<SCRIPT type="text/javascript" src="dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>
<?php
   session_start();
$idusuario=$_GET['idusuario'];
  $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
  $sql="Select * from usuarios where usuario='".$idusuario."';";  
  $resultado2=mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL select de usuario ".$idusuario);
  $colum = mysql_fetch_row($resultado2);
  	echo "<form name='comentario' method='Post', action='altacomentario.php' enctype='multipart/form-data'>";
	echo "<div id='Layer1'>";
	echo "<table width='750' height='450' border='0' align='center'>";
	echo "<tr>";
	echo "<td><span class='Estilo2'><font color=FFFFFF>FOTO</font></span></td>";
	echo "<td>";
	echo "<label>";
	echo "<input name='foto' type='file'>";
	echo "</label>";
 	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><span class='Estilo1'><font color=FFFFFF>COMENTARIO</font></span></td>";
	echo "<td>";
	echo "<label>";
	echo "<textarea name='comentario' cols='50' rows='1'></textarea>";
	echo "<label>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><span class='Estilo2'><font color=FFFFFF>PARA</font></span></td>";
	echo "<td>";
	echo "<label>";
	echo "<input name='para' type='text' value='$colum[2]' >";
	echo "</label>";
	echo "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td height='35'>";
	echo "<label>";
	echo "<input type='submit' name='envi' valuer='Publicar'/>";
	echo "</label>";
	echo "</td>";
	echo "<td>";
	echo "<label>";
	echo "<input type='reset' name='blanco' value='Cancelar'/>";
	echo "</label>";
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	echo "</div>";
	echo "</form>";
   mysql_free_result($resultado2);
 mysql_close($conexion);
?>
<!--<div id="Layer2"><span class="Estilo1">AGREGAR NUEVA ACTIVIDAD </span></div>-->
</body>
</html>
