<?
  session_start();
  if ($_REQUEST["idclase"]!="")
	   $_SESSION["idclase"]=$_REQUEST["idclase"];
	 $_REQUEST["idclase"]="";
	if ($_REQUEST["idtarea"]!="")
	   $_SESSION["idtarea"]=$_REQUEST["idtarea"]; 
   
    $idtarea=$_SESSION["idtarea"];
    //echo $idtarea;

	 
  $titulo=$_POST["titulo"]; 
  $replica=$_POST["descripcion"];
  $red="La creacion se a consumado";
  $id_conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die ("Error de conexion de base de datos"); 
  mysql_select_db("a8187156_rsa", $id_conexion) or die ("Error no sirve");
  $sql="insert into replicas (titulo,replica,idtarea,usuario) values('$titulo','$replica',$idtarea,'".$_SESSION['usuario']."');";
  mysql_query($sql,$id_conexion) or die ("Error al ejecutar la sentencia SQL ".$idtarea."plaenacion ".$_SESSION["planeacion"].$_SESSION['usuario']);
  echo "<script>alert('La creacion se a consumado')</script>"; 
  $com=strcmp($red,"La creacion se a consumado");
  if($red==0)
 // {print "<meta http-equiv=Refresh content=\"0 ; url=temas.php\>"; }
  {print "<meta http-equiv=Refresh content=\"0 ; url=tema.php\">"; }
  ?>