<?php
	$conectar=mysqli_connect('localhost','root','','operacion_it');
?>
	<!DOCTYPE html>
	<html>	
	<head>
		<title>HERRAMIENTA DE MONITOREO PARA EL OPERADOR</title>
		<link rel="stylesheet" type="text/css">
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
		<span id="liveclock" style="left:0;top:0; font-size:20px; font-family:'Lucida Sans'"></span>
	<br>
	<form method="POST" action="herra_monitor0.2.php">
	<center>
	<table border = "1">
		<tr>
			
			<td>id</td>
			<td>job</td>
			<td>grupo</td>
			<td>aplicacion</td>
			<td>descripcion</td>
			<td>critico_herramienta_fallidos</td>
			<td>accion_requerida</td>
			<td>historial_y_observaciones</td>
		</tr>
		<br>
		<input type="text" name="job" class="form-control" id="job">
			
			<input type="submit" value="Buscar" class="btn btn-success" name="btn1">
			
	</center>


		<?php 

		if (isset($_POST['btn1']))
		{
			$job = $_POST['job'];

		$sql="SELECT * FROM jobsoxxo WHERE job ='$job'";
		$resultado=mysqli_query($conectar,$sql);

		while($mostrar=mysqli_fetch_array($resultado)){
        ?>

        <tr>
            <td><?php echo $mostrar['id']?></td>
			<td><?php echo $mostrar['job']?></td>
			<td><?php echo $mostrar['grupo']?></td>
			<td><?php echo $mostrar['aplicacion']?></td>
			<td><?php echo $mostrar['descripcion']?></td>
			<td><?php echo $mostrar['critico_herramienta_fallidos']?></td>
			<td><?php echo $mostrar['accion_requerida']?></td>
			<td><?php echo $mostrar['historial_y_observaciones']?></td>

		</tr>
		<?php
	}
	}
	mysqli_close($conectar);
		?>
		
    </table>
    <p align="right"><button><a href='herra_monitor0.0.php'>volver al menu principal</button></a></p>
</from>
	</body>
	</html>