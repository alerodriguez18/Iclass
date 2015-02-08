<html>
<head>
<?
session_start();
if ($_REQUEST["idtarea"]!="")
	   $_SESSION["idtarea"]=$_REQUEST["idtarea"];
 $idtarea=$_SESSION["idtarea"];
   //echo "hola"+$idtarea;
?>
 <script type="text/javascript">
               function confirmacion(<?php $idtarea=$_SESSION["idtarea"];?>) {
            var answer = confirm("ESTA SEGURO QUE DESEA ELIMINAR SU TAREA")
            if (answer){
            alert("TAREA ELIMINADA")
            window.location.href="eliminartarea.php?idtarea=<? $idtarea;?>";
            }
            else{
           alert("CANCELADO")
		    window.location.href="temas.php";
           }
       }    
   </script>
</head>

<body onLoad="confirmacion()">

</body>
</html>