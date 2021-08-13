
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


	<!DOCTYPE html>
	<html>	
	<head>
		<title>HERRAMIENTA DE MONITOREO PARA EL OPERADOR</title>

		<link rel="stylesheet" type="text/css">
		
	</head>
	<body background="oxxoweb.jpg">
			<span id="liveclock" style="left:0;top:0; font-size:20px; font-family:'Lucida Sans'"></span>
		<form method="POST">
<br>
<br>
<h3>Actividad Por Hora</h3>

		<?php 
         date_default_timezone_set("America/Monterrey");
         $actividad=date("h a");
       
	    if ($actividad=="12 am")
		{
		echo $actividad;	
		}
		else if ($actividad=="01 am")
		{
		echo $actividad;	
		}	
		else if ($actividad=="02 am")
		{
		echo $actividad;	
		}	
		else if ($actividad=="03 am")
		{
		echo $actividad;	
		}	
		else if ($actividad=="04 am")
		{
		echo $actividad;	
		}	
		else if ($actividad=="05 am")
		{
		echo $actividad;	
		}	
		else if ($actividad=="06 am")
		{
		echo $actividad;	
		}	
		else if ($actividad=="07 am")
		{
		echo $actividad;	
		}	
		else if ($actividad=="08 am")
		{
		echo $actividad;	
		}	
		else if ($actividad=="09 am")
		{
		echo $actividad;	
		}	
		else if ($actividad=="10 am")
		{
		echo $actividad;	
		}	
		else if ($actividad=="11 am")
		{
		echo $actividad;	
		}	
		else if ($actividad=="12 pm")
		{
		echo $actividad;	
		}	
		else if ($actividad=="01 pm")
		{
		echo $actividad;	
		}	
		else if ($actividad=="02 pm")
		{
		echo $actividad;	
		}	
		else if ($actividad=="03 pm")
		{
		echo $actividad;	
		}	
        else if ($actividad=="04 pm")
		{
		echo $actividad;	
		}
		else if ($actividad=="05 pm")
		{
		echo $actividad;	
		}	
		else if ($actividad=="06 pm")
		{
		echo $actividad;	
		}	
		else if ($actividad=="07 pm")
		{
		echo $actividad;	
		}	
		else if ($actividad=="08 pm")
		{
		echo $actividad;	
		}	
		else if ($actividad=="09 pm")
		{
		echo $actividad;	
		}	
		else if ($actividad=="10 pm")
		{
		echo $actividad;	
		}	
		else if ($actividad=="11 pm")
		{
		echo $actividad;	
		}	


		

?>
<br>
<button><a href='herra_monitor0.0.php' value="Actualizar">Actualizar actividad</a></button>
	<center>
		<button><a href='herra_monitor0.1.php' value="agregar info de jobs">agregar info de jobs</a></button>
		<br>
		<button><a href='herra_monitor0.2.php' value="buscar info de jobs">buscar info de jobs</a></button>
		<br>
		<button><a href='herra_monitor0.3.php' value="directorio de equipos">directorio de equipos</a></button>

    </center>

</from>

	</body>
	</html>