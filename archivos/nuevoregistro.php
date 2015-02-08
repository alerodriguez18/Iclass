<?php
  $nombre=$_POST["nombre"];
  $apellidos=$_POST["apellidos"];
  $usuario=$_POST["usuario"];
  $contrasena=$_POST["contrasena"];
  $correo=$_POST["correo"];
  $foto=$_POST["foto"];
  $ruta="foto";
  $archivo=$_FILES['foto']['tmp_name'];
  $nombrearchivo=$_FILES['foto']['name'];
  move_uploaded_file($archivo,$ruta."/".$nombrearchivo);
  
  $ruta=$ruta."/".$nombrearchivo;
 
 
  $id_conexion=mysql_connect("mysql2.000webhost.com","a8187156_diego","diego123") or die ("Error de conexion de base de datos"); 
  mysql_select_db("a8187156_rsa", $id_conexion) or die ("Error no sirve");
  $sql="Insert into usuarios (nombre,apellidos,usuario,contrasena,correo,foto)";
  $sql.= "values ('$nombre','$apellidos','$usuario','$contrasena','$correo','$ruta');";
  mysql_query($sql,$id_conexion) or die ("Error al ejecutar la sentencia SQL");
     $para    = $correo;
        $asunto = "BIENVENIDO A IClass $nombre $apellidos";
        $mensaje.="<html>";
        $mensaje.="<body bgcolor='2c4762'>"; 
        $mensaje = "<hr>"; 
        $mensaje.= "<h2>Iclass es una página opcional que nos permitirá brindar tiempo y espacio para toda la comunidad educativa en general funcionando también como una clase de foro para los alumnos sin fines de lucro. Para mayor información favor de comunicarse por medio del registro a esa página web o a nuestra pagina de Facebook . Iclass fue fundado por alumnos de la carrera de Ingeniería en Informática de la Universidad Politécnica del Valle de México. Si usted desea hacer alguna donación favor de comunicarse a la siguiente dirección de correo electrónico iclassupvm@gmail.com.mx . Todos los derechos reservados..</h2><br>"; 
        $mensaje.= "<hr>"; 
        $mensaje.= "Nombres: <b>$nombre</b><br>"; 
        $mensaje.= "Apellidos:  <b>$apellidos</b><br>"; 
        $mensaje.= "Correo:    <b>$correo</b><br>";
        $mensaje.= "<hr>";  
        $mensaje.= "<hr>";
        $mensaje.="</body>";
        $mensaje.="</html>"; 
        // Para enviar correo HTML, la cabecera Content-type debe definirse 
        $cabeceras  = "MIME-Version: 1.0\n"; 
        $cabeceras .= "Content-type: text/html; charset=UTF-8\n"; 
        // Cabeceras adicionales 
        $cabeceras .= "From: ICLASS.INC <iclassupvm@gmail.com>\r\n"; 
        $cabeceras .= "To: $nombre $apellidos <$correo>\n"; 
        $cabeceras .= "Reply-To:$correo\n"; 
        $cabeceras .= "X-Mailer: PHP/" . phpversion(); 
        // Enviarlo 
        mail($para, $asunto, $mensaje, $cabeceras); 
 print "<meta http-equiv=Refresh content=\"0 ; url=index.php\">"; 
  ?>

