<?php
  session_start();
  $clave=$_POST["idclase"];
  $red="La creacion se a consumado";
  $id_conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die ("Error de conexion de base de datos"); 
  mysql_select_db("a8187156_rsa", $id_conexion) or die ("Error no sirve");
  $sql="Insert into usuarioclases values('".$_SESSION['usuario']."','$clave','U');";
  mysql_query($sql,$id_conexion) or die ("Error al ejecutar la sentencia SQL");
  echo "<script>alert('La creacion se a consumado')</script>"; 
  $com=strcmp($red,"La creacion se a consumado");
  ?>