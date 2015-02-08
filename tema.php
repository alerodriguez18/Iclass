<?php
session_start();
if ($_REQUEST["idclase"]!="")
	   $_SESSION["idclase"]=$_REQUEST["idclase"];

if ($_REQUEST["idplaneacion"]!="")
	   $_SESSION["idplaneacion"]=$_REQUEST["idplaneacion"];
    //echo $_SESSION["idplaneacion"];
    //$vp= $_SESSION["idplaneacion"];
   
?>
<style type="text/css">
#nom {
	position:absolute;
	width:900px;
	height:26px;
	z-index:3;
	color:#FFFFFF;
			border:solid 1px #ddd;
-moz-box-shadow:7px 8px 2px #333;
-webkit-box-shadow:7px 8px 2px #333;
box-shadow:7px 8px 2px #333;
}
</style>

<html>
<head>

</head>

<body  bgcolor="2c4762">

<?php
 
     $conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die("Error en la conexi&oacute;n");
  mysql_select_db("a8187156_rsa",$conexion) or die("Error en la base de datos");
$sql1="select nomclase from clases where idclase='".$_SESSION["idclase"]."'";
   $sql2="select nombreactividad from planeacion where idplaneacion=".$_SESSION["idplaneacion"].";";
   $result=mysql_query($sql1,$conexion) or die ("Error al ejecutar la sentencia SQL");
   $result2=mysql_query($sql2,$conexion);
   $row6=mysql_fetch_array($result2);
  while ($row=mysql_fetch_array($result))
   {	
		echo "<div id=nom><font color=FFFFFF >PLANEACIÓN DE LA CLASE<font color=#00FFFF size=+2>---></font>$row[0]<font color=#00FFFF size=+2>---></font>TEMA<font color=#00FFFF size=+2>---></font>$row6[0]</font></div>";
   }
   $sql="select idtarea,idplaneacion,titulo,mensaje,usuario from tareas where idclase='".$_SESSION["idclase"]."' and idplaneacion=".$_SESSION["idplaneacion"].";";
  $sql="select idtarea,idplaneacion,titulo,mensaje,usuario from tareas where idclase='".$_SESSION["idclase"]."' and idplaneacion=".$_SESSION["idplaneacion"].";";
  $resultado=mysql_query($sql,$conexion) or die ("Error al ejecutar la sentencia SQL esta");
            $idplaneacion=$_SESSION["idplaneacion"];
            echo"<br><br>";
        echo "<a href='resumentareas.php?idplaneacion=$idplaneacion'><font color=FFFFFF><center>Resumen Tareas</center></font></a>";
            $idplaneacion=$_SESSION["idplaneacion"];
        echo "<a href='formtarea.php?idplaneacion=$idplaneacion'><font color=FFFFFF><center>Nueva tarea</center></font></a>";
	    echo $titulo;
    while ($row = mysql_fetch_row($resultado)){
              $_SESSION["idtarea"]=idtarea;
	    echo "<font color=FFFFFF >TITULO:  </font>";
	    echo " <a href=muestraclase.php?idtarea=$row[0]><font color=FFFFFF>$row[2]</font> </a><br>";
        echo "<font color=FFFFFF>DESCRIPCION:    $row[3]</font> <br>";
	    echo "<font color=FFFFFF>POR:     <i>$row[4]</i></font> <br>";
		
	   //SELECT DE REPLICAS
	    //echo $row[0];
	   $sql3="Select titulo,replica,idtarea,usuario from replicas where idtarea=".$row[0]." ORDER BY idreplica;";
	  $resultado3=mysql_query($sql3,$conexion) or die ("Error al ejecutar la sentencia Sql Select usuarioclases");
		$row3=mysql_fetch_row($resultado3);
		if($row3[2]==$row[0]){
		echo " &nbsp;&nbsp;&nbsp;&nbsp;<font color=#00FFFF size=4><i>COMENTARIOS</i></font><br>";
               echo "<hr align='left' noshade='noshade' size='2' width='20%' />";
	   echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=FFFFFF>De: $row3[3]</font>&nbsp;<br>";
	    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=FFFFFF>Tema: $row3[0]</font>&nbsp;<br>";
             echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=FFFFFF>$row3[1]</font>&nbsp;<br>"; 
                   }
		for($vc=0;$vc=$row3=mysql_fetch_array($resultado3);$vc++)
		{
        //echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=FFFFFF>$row3[1]</font>&nbsp;<br>";
                   
		if($row3[2]==$row[0]){
		//echo $row[0];
		
	  echo "&nbsp;<font color=FFFFFF>De: $row3[3]</font>&nbsp;<br>";
	    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=FFFFFF>Tema: $row3[0]</font>&nbsp;<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color=FFFFFF>$row3[1]</font>&nbsp;<br>";
	  	}
		}
	//SELECT DE OPCIONES
         
	 $sql2="Select * from usuarioclases where idclase='".$_SESSION["idclase"]."' and usuario='".$_SESSION['usuario']."';";
     $resultado2=mysql_query($sql2,$conexion) or die ("Error al ejecutar la sentencia Sql Select usuarioclases");
     $row2=mysql_fetch_row($resultado2);
              
	if($row[6]==$idplaneacion && $row[4]==$_SESSION['usuario'] || $row2[0]==$_SESSION['usuario'] && $row2[2]=="A"){
                   
                       $_SESSION["idtarea"]=idtarea;  
		echo " <a href=editartarea.php?idtarea=$row[0]><font color=#00FFFF><i>[EDITAR]</i></font> </a>";
	    echo " <a href=confirmareliminar.php?idtarea=$row[0]><font color=#00FFFF><i>[BORRAR]</i></font> </a>";
		echo " <a href=replica.php?idtarea=$row[0]><font color=#00FFFF><i>[COMENTAR]</i></font></a><br> ";
		echo "<hr>";
		 }
		elseif($row[4]!=$_SESSION['usuario'] && $row2[2]=="U"){
	     echo " <a href=replica.php?idtarea=$row[0]><font color=#00FFFF><i>[COMENTAR]</i></font></a><br> ";
		 echo "<hr>";
		 }else{
                   
		 echo " <a href=replica.php?idtarea=$row[0]><font color=#00FFFF ><i>[COMENTAR]</i></font> ";
		 echo " <a href=editartarea.php?idtarea=$row[0]><font color=#00FFFF><i>[EDITAR]</i></font> </a>";
		 echo "<hr>";
		 }
		
		}
	
	  echo "<hr>";
	
	
	?>
 <div id="Layer4" style="position:absolute; left:950; top:10">
  <?php 
      $sql1="select * from usuarioclases where usuario='".$_SESSION["usuario"]."'and idclase='".$_SESSION["idclase"]."'";
	 $result1=mysql_query($sql1,$conexion) or die ("Error al ejecutar la sentencia SQL");
	 while ($row1=mysql_fetch_array($result1))
   {	
		//echo $row1[2];
		if($row1[2]=="A"){
echo "<font color=FFFFFF> PERFIL:ADMIN</font>";
}else{
   echo "<font color=FFFFFF>PERFIL:USUARIO</font>";
}
   }
 ?>
 </div>


</body>
</html>