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
	<form method="POST" action="herra_monitor0.3.php">
	<center>
	<table border = "1">
		<tr>
			
			<td>equipo</td>
			<td>analista de guardia</td>
			<td>tel analista1</td>
			<td>tel analista2</td>
			<td>tel analista3</td>
			<td>tel analista4</td>
			<td>tel analista5</td>
			<td>tel analista6</td>
			
		</tr>
		<br>
		<input type="text" name="equipo" class="form-control" id="equipo">	
			<input type="submit" value="Buscar Equipo" name="btn1">
			<br>
			

	</center>


		<?php 

		if (isset($_POST['btn1']))
		{
			$equipo = $_POST['equipo'];

		$sql="SELECT * FROM analistas WHERE equipo ='$equipo'";
		$resultado=mysqli_query($conectar,$sql);

		while($mostrar=mysqli_fetch_array($resultado)){
        ?>

        <tr>
            <td><?php echo $mostrar['equipo']?></td>
			<td><?php echo $mostrar['analista_guardia']?></td>
			<td><?php echo $mostrar['tel_analista1']?></td>
			<td><?php echo $mostrar['tel_analista2']?></td>
			<td><?php echo $mostrar['tel_analista3']?></td>
			<td><?php echo $mostrar['tel_analista4']?></td>
			<td><?php echo $mostrar['tel_analista5']?></td>
			<td><?php echo $mostrar['tel_analista6']?></td>
			

		</tr>
		<?php
	}
	}
	?>
	<?php
	if (isset($_POST['btn2']))
		{
       $equipo = $_POST['equipo'];
       $analista_guardia = $_POST['analista_guardia'];
			$sql="UPDATE analistas SET analista_guardia='$analista_guardia' WHERE equipo='$equipo'";
		$resultado=mysqli_query($conectar,$sql);
		
		}
		
		mysqli_close($conectar);
		?>
		<input type="text" name="analista_guardia" class="form-control" id="analista_guardia">	
			<input type="submit" value="actualizar guardia" name="btn2">
    </table>
    <p align="right"><button><a href='herra_monitor0.0.php'>volver a menu principal</a></button></p>
</from>

	</body>
	</html>