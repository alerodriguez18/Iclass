<?
  session_start();
  if ($_REQUEST["idclase"]!="")
	   $_SESSION["idclase"]=$_REQUEST["idclase"];
	 $_REQUEST["idclase"]="";

 if ($_REQUEST["idplaneacion"]!="")
	   $_SESSION["idplaneacion"]=$_REQUEST["idplaneacion"];

   

  $titulo=$_POST["nombretarea"];
  $mensaje=$_POST["Descripcion"];
  $red="La creacion se a consumado";
  $fecha=date(Y.'-'.m.'-'.d);
  $id_conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die ("Error de conexion de base de datos"); 
  mysql_select_db("a8187156_rsa", $id_conexion) or die ("Error no sirve");
  $sql="Insert into tareas(titulo,mensaje,fecha,idclase,idplaneacion,usuario)values('$titulo','$mensaje','".$fecha."','".$_SESSION["idclase"]."','".$_SESSION["idplaneacion"]."','".$_SESSION["usuario"]."');";
  //$sql="insert into tareas values ('$idtarea','$titulo','$mensaje','".$_SESSION["idclase"]."','$idplaneacion','".$_SESSION['usuario']."');";
  //$sql="select titulo,mensaje,usuario from tareas where idclase='".$_SESSION["idclase"]."' and idplaneacion=".$_SESSION["idplaneacion"].";";
  mysql_query($sql,$id_conexion) or die ("Error al ejecutar la sentencia SQL");
echo "<script>alert('La creacion se a consumado')</script>"; 
  $com=strcmp($red,"La creacion se a consumado");
  if($red==0)
  {
  print"<meta http-equiv='Refresh' content=\"0; url=temas.php\">";

   }
  ?>