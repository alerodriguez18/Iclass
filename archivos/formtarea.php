<?php
session_start();
if ($_REQUEST["idplaneacion"]!="")
	$_SESSION["idplaneacion"]=$_REQUEST["idplaneacion"];
    
$idplaneacion=$_SESSION["idplaneacion"]; 
//echo $idplaneacion;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<form name="form1" method="post" action="nuevatarea.php?idplaneacion=<?php echo $idplaneacion;?> >

<div id="Layer1"  >
  <table width="752" height="550" border="0" align="center">
    <tr>
      <td width="76" height="43"><p class="Estilo1">Titulo de Tarea  </p></td>
      <td width="556">
          <label><br />
          <input name="nombretarea" type="text" id="nombretarea" />
          </label>
      </td>
    </tr>
    <tr>
      <td height="116"><p class="Estilo1">&nbsp;</p>
      <p class="Estilo1">&nbsp;</p></td>
      <td>
        <label></label>
      </td>
    </tr>
    <tr>
      <td><span class="Estilo1">Descripcion de la tarea </span></td>
      <td>
          <label>
          <textarea name="Descripcion" cols="200" rows="20"></textarea>
          </label>
      </td>
    </tr>
    <tr>
      <td height="37">
          <label>
          <input type="submit" name="Submit" value="Agregar"  />
          </label>
      </td>
      <td>
          <label>
          <input type="reset" name="Submit2" value="Cancelar" />
          </label>
      </td>
    </tr>
	
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="Layer2"><span class="Estilo1">AGREGAR NUEVA TAREA </span></div>
</body>
</html>
