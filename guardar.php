<?php

//Chiphysi programación suscribete 
//V 0.1 original
//Autor: Chiphysi  Autor: Jhonatan Cardona  
//Derechos de autor(Suscribete)


    $usuario = "root"; //en ste caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="formulario1"; //nombre de la base de datos
    $boton1 =""; //variable

    $var1 = "";
    $var2 = "";
    $var3 = "";


//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        //recuperar las variables
    $nombre=$_POST['nombre']; //name="nombre"
    $sexo=$_POST['sexo']; //name="correo"
    $edad=$_POST['edad']; //name="mensaje" //name="mensaje"
    $email=$_POST['email'];
    $intereses=$_POST['intereses']; //name="mensaje"
    $preferencia=$_POST['preferencia'];

    //sentencia sql
    $sql="INSERT INTO datos VALUES ('','$nombre','$sexo','$edad','$email','$intereses','$preferencia')"; //manda a traer los valores de '$nombre','$correo','$mensaje'
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conexion, $sql);

    
    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"huvo algun error"; //si algo sale mal mandanos este mensaje
        
    }else{
        //echo"datos guardado correctamente <br><a href='index.html'>volver</a>"; //si todo sale bien mandanos este mensaje
         //Compruebo si hay algún resultado
         $row= mysqli_query($conexion,"SELECT * FROM datos ORDER by id DESC limit 1 ") or die ("problemas en consultas:".mysqli_error());
        $row = mysqli_fetch_array($row);
         //Guardo los datos de la BD en las variables de php
         $var1 = $row["preferencia"];
           switch($var1) {
            case"Deportes" :
            header('Location: deportes.php');
            break;
            case "Idiomas":
            header('Location: idiomas.php');
            break;
            case "Cocina":
            header('Location: cocina.php');
            break;
            case "Baile":
            header('Location: baile.php');
            break;
            case "Electricidad":
            header('Location: electricidad.php');
            break;
            case "Manicura":
            header('Location: manicura.php');
            break;
            case "Estilista":
            header('Location: peluqueria.php');
            break;
            case "Plomeria":
            header('Location: plomeria.php');
            break;
            case "Costura":
            header('Location: costura.php');
            break;
            default:
            header('Location: buscadorGenerico.php');
            }
            
 }       
      
       
        
    
     
?>﻿



