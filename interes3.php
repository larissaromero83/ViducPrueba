<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
   
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>VIEDUC</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

        
 
    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="interes.html">
                <img src="images/logo.png" alt="Homepage">
            </a>
        </div>

    

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">
        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-2 display-2--light">Contanos sobre ti 
                
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
        </h1>

                <h3 class="subhead">Contanos que Buscas</h3>
                
                <h1 class="display-2 display-2--light">Videos sobre tus intereses</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">

            <div class="contact-primary">

                <!-- <h3 class="h6">Comp</h3>-->
                <h3 class="h2">Selecciona</h3>
                <!-- contact ver la opccion para suscribirte con correo como gramo
    ================================================== -->


                <div class="home-content__buttons">
                    <a href="#contact" class="smoothscroll btn btn--stroke">
                        DEPORTE
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        JUEGOS
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        IDIOMAS
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        ELECTRICIDAD
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        CARPINTERIA
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        PLOMERIA
                    </a>
                </div>
                
               
            </div> <!-- end contact-primary -->
            <input type="button" value=" Volver" onclick="location='index.html'" />
        </div> <!-- end contact-content -->
        
    </section> <!-- end s-contact -->
    

    <!-- footer
    ================================================== -->
   

    <!-- photoswipe background
    ================================================== -->
  


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>


