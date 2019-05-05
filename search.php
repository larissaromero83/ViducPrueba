<?php
/**
 * Library Requirements
 *
 * 1. Install composer (https://getcomposer.org)
 * 2. On the command line, change to this directory (api-samples/php)
 * 3. Require the google/apiclient library
 *    $ composer require google/apiclient:~2.0
 */
if ( !file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
    throw new \Exception( 'please run "composer require google/apiclient:~2.0" in "' . __DIR__ . '"' );
}
require_once __DIR__ . '/vendor/autoload.php';
// This code will execute if the user entered a search query in the form
// and submitted the form. Otherwise, the page displays the form above.
if ( isset( $_GET[ 'q' ] ) && isset( $_GET[ 'maxResults' ] ) ) {
    /*
     * Set $DEVELOPER_KEY to the "API key" value from the "Access" tab of the
     * {{ Google Cloud Console }} <{{ https://cloud.google.com/console }}>
     * Please ensure that you have enabled the YouTube Data API for your project.
     */
    $DEVELOPER_KEY = 'AIzaSyAcegEcjGVRThQ816PniqyLRsFD6WH4PHg';
    $client        = new Google_Client();
    $client->setDeveloperKey( $DEVELOPER_KEY );
    // Define an object that will be used to make all API requests.
    $youtube  = new Google_Service_YouTube( $client );
    $htmlBody = '';
    try {
        // Call the search.list method to retrieve results matching the specified
        // query term.
        $searchResponse = $youtube->search->listSearch( 'id,snippet', array(
             'q' => $_GET[ 'q' ],
            'maxResults' => $_GET[ 'maxResults' ] 
        ) );
        $videos         = '';
        $direccion      = '<iframe class="zoom" ; width="450" height="300" src="https://www.youtube.com/embed/%s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>﻿';
        // Add each result to the appropriate list, and then display the lists of
        // matching videos, channels, and playlists.
        foreach ( $searchResponse[ 'items' ] as $searchResult ) {
            switch ( $searchResult[ 'id' ][ 'kind' ] ) {
                case 'youtube#video':
                    $videos .= sprintf( $direccion, $searchResult[ 'id' ][ 'videoId' ] );
                    break;
            }
        }
        //<a class="thumbnail" href="#thumb"><img src="URL de la imagen" width="250px" height="150px" border="0" /><span><img src="URL de la imagen" /><br />Descripción para la foto.</span></a>
        $htmlBody .= <<<END
   <ul>$videos</ul>
END;
    }
    catch ( Google_Service_Exception $e ) {
        $htmlBody .= sprintf( '<p>A service error occurred: <code>%s</code></p>', htmlspecialchars( $e->getMessage() ) );
    }
    catch ( Google_Exception $e ) {
        $htmlBody .= sprintf( '<p>An client error occurred: <code>%s</code></p>', htmlspecialchars( $e->getMessage() ) );
    }
}
?>



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




<style type="text/css">
	.zoom{
		transition: 1.5s ease;
 		-moz-transition: 1.5s ease; /* Firefox */
 		-webkit-transition: 1.5s ease; /* Chrome - Safari */
 		-o-transition: 1.5s ease; /* Opera */
     
	}
	.zoom:hover{
		transform : scale(2);
		-moz-transform : scale(2); /* Firefox */
		-webkit-transform : scale(2); /* Chrome - Safari */
		-o-transform : scale(2); /* Opera */
		-ms-transform : scale(2); /* IE9 */
    margin-left:auto;
    margin-right:auto;
   
   
}
	}
</style>
    
    

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
   <div class="contact__line"></div>
   <div class="row section-header" data-aos="fade-up">
      <div class="col-full">
         <h1 class="display-2 display-2--light">Esto es lo que buscas </h1>
         <h3 class="subhead">Tus preferencias</h3>
      </div>
   </div>
   <div class="row contact-contentes" data-aos="fade-up">
      <div class="col-block service-item" data-aos="fade-up">
         <div class="service-text" align="center">
            <?=$htmlBody?>
            <div style="text-align: left ;width:1200px">
               <input type="button" value="Volver" onclick="javascript:history.back(-1);"/>
            </div>
         </div>
      </div>
   </div>
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


