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
    <title>VIDUC</title>
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
            </header>
            <!-- end s-header -->
            <!-- contact
               ================================================== -->
            <section id="contact" class="s-contact">
               <div class="overlay"></div>
               <div class="row section-header" data-aos="fade-up">
                  <h1 class="display-2 display-2--light">Hola 
                     <?php
                        include("select.php");
                        ?>
                  </h1>
                  <h3 class="subhead">Esto te puede interesar</h3>
                  <h1 class="display-2 display-2--light">Varias recetas para aprender</h1>
               </div>
               </div>
               <div class="row contact-contentes" data-aos="fade-up">
                  <div class="contact-primary">
                     <div class="col-block service-item" data-aos="fade-up" id="columna1">
                        <div class="service-text">
                           <iframe width="500" height="300" align="left" src="https://www.youtube.com/embed/uY1cm-7PBes" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                           <h3 class="subhead">May May aprende a cocinar y hoy es Chef</h3>
                           <br>
                           <P ALIGN="justify">Pero lo que es excepcional en el caso de May es que para lograr convertirse en una chef de éxito no tuvo que asistir a mil y una clases de cocina, No, lo único que necesitó la chef Mahasrabphaisal fue YouTube. </p>
                        </div>
                     </div>
                     <div id="columna2">
                        <form action="search.php" method="GET">
                           <div>
                              <h3 class="subhead">Temas a buscar :</h3>
                              <input type="search" style=" border-style: solid; font-size:12pt; color: #f7f9f7; letter-spacing : 3px; id=" q " name="q " placeholder="Temas Buscados ">
                           </div>
                           <div >
                              <h3 class="subhead"> Cantidad de Resultados:</h3>
                              <input type="number" style=" border-style: solid; font-size:12pt; color: #f7f9f7; letter-spacing : 3px; id="maxResults" name="maxResults" min="1" max="50" step="1" value="10">
                           </div>
                           <div style="text-align: right ;width:300px">
                              <input type="submit" value="Buscar">
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-block service-item" data-aos="fade-up">
                     <div class="service-text">
                        <iframe width="450" height="250" src="https://www.youtube.com/embed/wStIus5jRbE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div>
                     <div class="service-text">
                        <iframe width="450" height="250" src="https://www.youtube.com/embed/nVVbJxqHvBA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div>
                  </div>
                  <div class="col-block service-item" data-aos="fade-up">
                     <div class="service-text">
                        <iframe width="450" height="250" src="https://www.youtube.com/embed/f0bPm-6hWls" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div>
                     <div class="service-text">
                        <iframe width="450" height="250" src="https://www.youtube.com/embed/uga2DGux0_I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div>
                  </div>
                  <div class="col-block service-item" data-aos="fade-up">
                     <div class="service-text">
                        <iframe width="450" height="250" src="https://www.youtube.com/embed/MNNuEz1OHHk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div>
                     <div class="service-text">
                        <iframe width="450" height="250" src="https://www.youtube.com/embed/mm7btVGedpA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div>
                  </div>
                  <div style="text-align: left ;width:800px">
                     <input type="button" value=" Volver" onclick="location='index.html'" />
                  </div>
               </div>
               <!-- end contact-primary -->
               </div>
               <!-- end contact-content -->
            </section>
            <!-- end s-contact -->
            
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