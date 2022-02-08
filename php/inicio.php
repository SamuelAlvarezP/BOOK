<?php
 include "conexion.php";

 $usuario = $_POST['usuario'];
 $clave = $_POST['clave'];

 $estudiante = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and clave = '$clave' && rol = 'estudiante'");

 $maestro = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and clave = '$clave' && rol = 'maestro'");
 $acudiente = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and clave = '$clave' && rol = 'maestro'");

 if(mysqli_num_rows($estudiante)>0){
 	$fila = mysqli_fetch_row($estudiante);
 	$nombres = $fila[3];
 	$rol = $fila[9];
 	session_start();
 	$_SESSION['usuario'] = $usuario;
 	$_SESSION['nombres'] = $nombres;
 	$_SESSION['rol'] = $rol;
 	header('location: http://book.local/php/estudiante.php');
 	
 }
 elseif ( mysqli_num_rows($maestro)>0) {
 	$fila = mysqli_fetch_row($maestro);
 	$nombres = $fila[3];
 	$rol = $fila[9];
 	session_start();
 	$_SESSION['usuario'] = $usuario;
 	$_SESSION['nombres'] = $nombres;
 	$_SESSION['rol'] = $rol;
 	header('location:maestro.php');
 
 }
 elseif (mysqli_num_rows($acudiente)>0) {
 	$fila = mysqli_fetch_row($acudiente);
 	$nombres = $fila[3];
 	$rol = $fila[9];
 	session_start();
 	$_SESSION['usuario'] = $usuario;
 	$_SESSION['nombres'] = $nombres;
 	$_SESSION['rol'] = $rol;
 	header('location:acudiente.php');
 }
 else{
 	header("location:http://book.local/login.html");

 }
 mysqli_close($conexion);

?>
<a href="http://book.local/login.html">REGRESAR</a>