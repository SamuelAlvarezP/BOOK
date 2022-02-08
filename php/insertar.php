<?php
 require ("conexion.php"); 
   
 $tipo_de_documento=$_POST['tipo_de_documento'];
 $numero_documento=$_POST['numero_documento'];
 $nombres=$_POST['nombres'];
 $apellidos=$_POST['apellidos'];
 $sexo=$_POST['sexo'];
 $edad=$_POST['edad'];
 $usuario=$_POST['usuario'];
 $clave=$_POST['clave'];
 $rol=$_POST['rol'];





 $datos = "INSERT INTO usuarios VALUES('$tipo_de_documento','$numero_documento','$nombres','$apellidos','$sexo','$edad','$usuario','$clave','$rol')";

 $verificar_usuario=mysqli_query($conexion,"SELECT * FROM usuarios WHERE numero_documento ='$numero_documento'");

 if (mysqli_num_rows($verificar_usuario)>0) {
 	echo '<script>
 	alert("El documento ingresado ya existe");
 	window.history.go(-1);</script>';
 	exit();
 }
 $resultado = mysqli_query($conexion,$datos);

 if ($resultado) {
 	echo '<script>alert("El usuario se ingreso correctamente");
 	header("location.http://book.local/login.html");
 	</script>';

 }else{
 	echo "hay problemas en la insercion de registros";
 }

 
 mysqli_close($conexion);
 


 
?>