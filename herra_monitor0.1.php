<?php
	$conectar=mysqli_connect('localhost','root','','operacion_it');
?>
	<!DOCTYPE html>
	<html>	
	<head>

		<title>HERRAMIENTA DE MONITOREO PARA EL OPERADOR</title>
		<link rel="stylesheet" type="text/css" href="estilo.css"></link>
		<script language="JavaScript" type="text/javascript">
// Reloj digital para web javascript
// Copyright 2015 bloguero-ec.
// Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com)
function show5(){
if (!document.layers&&!document.all&&!document.getElementById)
return
 
 var Digital=new Date()
 var hours=Digital.getHours()
 var minutes=Digital.getMinutes()
 var seconds=Digital.getSeconds()
 
var dn="PM"
if (hours<12)
dn="AM"
if (hours>12)
hours=hours-12
if (hours==0)
hours=12
 
 if (minutes<=9)
 minutes="0"+minutes
 if (seconds<=9)
 seconds="0"+seconds
//change font size here to your desire
myclock="<b>Hora actual:   "+hours+":"+minutes+":"
 +seconds+" "+dn+"</b>"
if (document.layers){
document.layers.liveclock.document.write(myclock)
document.layers.liveclock.document.close()
}
else if (document.all)
liveclock.innerHTML=myclock
else if (document.getElementById)
document.getElementById("liveclock").innerHTML=myclock
setTimeout("show5()",1000)
 }
 
 
window.onload=show5
  
 </script>
	</head>
	<body background="oxxoweb.jpg">
	<center>
		<b><td>HERRAMIENTA DEL OPERADOR</td></b>
		<br>
		<p align="right"><span id="liveclock" style="left:0;top:0; font-size:20px; font-family:'Lucida Sans'"></p></span>

	</center>
	<br>
	
     <div class="row">
     <div calss="col-md-4"></div>
     <div class="col-md-4"></div>
    
     
     <form method="POST" action="herra_monitor0.1.php">
<link rel="stylesheet" type="text/css" href="estilo.css"></link>
     <br>   	
  
        <div class="form-group">
     	<label form="id">id</label>
     	<input type="text" name="id" class="form-control" id="id">
       	</div>
<br>
        <div class="form-group">
     	<label form="job">job</label>
     	<input type="text" name="job" class="form-control" id="job">
     	</div>
<br>
     	<div class="form-group">
     	<label form="grupo">grupo</label>
     	<input type="text" name="grupo" class="form-control" id="grupo">
     	</div>
<br>
     	<div class="form-group">
     	<label form="aplicacion">aplicacion</label>
     	<input type="text" name="aplicacion" class="form-control" id="aplicacion">
     	</div>
<br>
     	<div class="form-group">
     	<label form="critico_herramienta_fallidos">critico_herramienta_fallidos</label>
     	<input type="text" name="critico_herramienta_fallidos" class="form-control" id="critico_herramienta_fallidos">
     	</div>
<br>     	
     	<div class="form-group">
     	<label form="descripcion">descripcion</label>
     	<textarea name="descripcion" class="form-control" id="descripcion"></textarea>
     	</div>
<br>
     	<div class="form-group">
     	<label form="accion_requerida">accion_requerida</label>
     	<textarea name="accion_requerida" class="form-control" id="accion_requerida"></textarea>
     	</div>
<br>
     	<div class="form-group">
        <label form="historial_y_observaciones">historial_y_observaciones</label>
     	<textarea name="historial_y_observaciones" class="form-control" id="historial_y_observaciones"></textarea>
     	</div>
<br>
    <center>
    	<input type="submit" value="Agregar" class="btn btn-success" name="btn1">
    	
    </center>


<?php

if (isset($_POST['btn1']))
{
	
	$id = $_POST['id'];
	$job = $_POST['job'];
	$grupo = $_POST['grupo'];
	$aplicacion = $_POST['aplicacion'];
	$descripcion = $_POST['descripcion'];
	$critico_herramienta_fallidos = $_POST['critico_herramienta_fallidos'];
	$accion_requerida = $_POST['accion_requerida'];
	$historial_y_observaciones = $_POST['historial_y_observaciones'];
    
    mysqli_query($conectar,"INSERT INTO jobsoxxo (id,job,grupo,aplicacion,descripcion,critico_herramienta_fallidos,accion_requerida,historial_y_observaciones) VALUES ('$id','$job','$grupo','$aplicacion','$descripcion','$critico_herramienta_fallidos','$accion_requerida','$historial_y_observaciones')");
echo"datos guardados correctamente";
}

?>


</div>
<div class="col-md-4">
	
</div>
</div>
<p align="right"><button><a href='herra_monitor0.0.php'>volver al menu principal</a></button></center></p>
</form>

	
</div>

</div>

	</body>
	</html>