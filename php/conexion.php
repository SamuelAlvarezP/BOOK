<?php
$conexion = mysqli_connect("localhost","root","","book") or die ("problemas en la conexion");
 
 if (!$conexion) {
	 echo "problemas en la conexion";
	 }else{
	 	echo "hay una conexion a la base de datos";
	 }
?>