<?php

include "conexion.php";

session_star();

if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 1:
            header('location:http://book.local/php/estudiante.php');
            break;
        case 2:
            header('location:http://book.local/index.php');
            break;
        case 3:
            header('location:http://book.local/acudiente.php');
            break;
        default:
            header('location:http://book.local/login.html');
            break;
    }
}

if (isset($_POST['usuario']) && isset(['clave'])) {
    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];

    $conne = new databse();
    $query = $conne->connect()->prepare('SELECT * FROM usuarios WHERE usuario =:usuario AND clave =:clave');
    $query->execute(['usuario' =>$usuario, 'clave' =>$clave]);

    $row = $query->fetch(PDO::FETCH_NUM);
    if ($row == true) {
        
    }else{
        echo "El usuario o contraseña son incorrectos";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio sesion BOOK</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	
	<link rel="stylesheet" href="css/estilos1.css">

</head>  
<body>
    <form class="formulario" method="post" action="">
    <a href="file:///C:/Users/samue/OneDrive/BOOK/index.html"><i class="fas fa-arrow-left"></i></a>
    <h1>Inicio Sesión BOOK</h1>
     <div class="contenedor">
     
     
         
         <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" placeholder="Usuario" name="usuario">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" name="clave">
         </div>
         <div class="input-contenedor">
          
            <select name="rol">
            
                <option>Seleccione un rol</option>
                <option>Estudiante</option>
                <option>Maestro</option>
                <option>Acudiente</option>
           
            </select>
         
         </div>
         <input type="submit" value="Acceder" class="button">
         
     </div>
    </form>
</body>
</html>