<html>
<head>
 <script type="text/javascript">
               function confirmacion(id) {
            var answer = confirm("Esta seguro que desea eliminar")
            if (answer){
            alert("Evento eliminado")
            window.location.href="eliminar.php?ide="+$idtarea;
            }
            else{
           alert("Cancelado")
           }
       }    
   </script>
</head>

<body onLoad="opcion()">

</body>
</html>