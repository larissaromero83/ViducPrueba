<?php
//include("guardar.php");
    $usuario = "root"; //en ste caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="formulario1"; //nombre de la base de datos

$conexion =mysqli_connect ($servidor,$usuario,"") or die ("problemas al conectar server");

mysqli_select_db($conexion,$basededatos) or die ("Error conexion al conectarse a la Base de datos");

$registro= mysqli_query($conexion,"SELECT * FROM datos ORDER by id DESC limit 1 ") or die ("problemas en consultas:".mysqli_error());

while($reg= mysqli_fetch_array($registro)){

    echo $reg['nombre'];
    
}
?>

