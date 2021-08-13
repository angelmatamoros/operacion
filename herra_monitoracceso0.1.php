<?php
	
    $conectar=mysqli_connect('localhost','root','','operacion_it'); 

    $usuario=$_POST['usuario'];	
    $clave=$_POST['clave'];


    
    $consulta="SELECT * FROM accesos WHERE usuario='$usuario' and clave='$clave'";  
    $resultado=mysqli_query($conectar,$consulta);


    $filas=mysqli_num_rows($resultado);


    if ($filas == 1)
    {
    	header ("location:herra_monitor0.0.php");
     
       }
       else if ($filas == 0)
       {
       	echo "error no se arma no entras";
       }

    ?>