<?php

/**
 * Library Requirements
 *
 * 1. Install composer (https://getcomposer.org)
 * 2. On the command line, change to this directory (api-samples/php)
 * 3. Require the google/apiclient library
 *    $ composer require google/apiclient:~2.0
 */
if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
  throw new \Exception('please run "composer require google/apiclient:~2.0" in "' . __DIR__ .'"');
}

require_once __DIR__ . '/vendor/autoload.php';



// This code will execute if the user entered a search query in the form
// and submitted the form. Otherwise, the page displays the form above.
if (isset($_GET['q']) && isset($_GET['maxResults'])) {
  /*
   * Set $DEVELOPER_KEY to the "API key" value from the "Access" tab of the
   * {{ Google Cloud Console }} <{{ https://cloud.google.com/console }}>
   * Please ensure that you have enabled the YouTube Data API for your project.
   */
  $DEVELOPER_KEY = 'AIzaSyAcegEcjGVRThQ816PniqyLRsFD6WH4PHg';

  $client = new Google_Client();
  $client->setDeveloperKey($DEVELOPER_KEY);

  // Define an object that will be used to make all API requests.
  $youtube = new Google_Service_YouTube($client);

  $htmlBody = '';
  try {

    // Call the search.list method to retrieve results matching the specified
    // query term.
    $searchResponse = $youtube->search->listSearch('id,snippet', array(
      'q' => $_GET['q'],
      'maxResults' => $_GET['maxResults'],
    ));
    //<img src="URL DE LA IMAGEN" onmouseover="this.width=500;this.height=400;" onmouseout="this.width=200;this.height=150;" width="200" height="150" />
    //'<iframe width="560" height="315" src="https://www.youtube.com/embed/%s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>﻿';
    //<a class="thumbnail" href="#thumb"><img src="URL de la imagen" width="100px" height="80px" border="0" /><span><img src="URL de la imagen" /><br />Pie de foto</span></a>
    //<iframe onmouseover="this.width=500;this.height=400;" onmouseout="this.width=200;this.height=150;" width="200" height="150" src="https://www.youtube.com/embed/%s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>﻿';
  
    
    $videos = '';
    $channels = '';
    $playlists = '';
    $direccion ='<article class="blox bloxPopup" data-src="https://www.youtube.com/watch?v=%s" >
    <div class="featured">
        <iframe width="450" height="250" src="https://www.youtube.com/embed/%s" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   
    </div>';

    // Add each result to the appropriate list, and then display the lists of
    // matching videos, channels, and playlists.
    foreach ($searchResponse['items'] as $searchResult) {
      switch ($searchResult['id']['kind']) {
        case 'youtube#video':
          $videos .= sprintf($direccion, $searchResult['id']['videoId'],$searchResult['id']['videoId']);
          break;
        case 'youtube#channel':
          $channels .= sprintf('<li>%s (%s)</li>',
              $searchResult['snippet']['title'], $searchResult['id']['channelId']);
          break;
        case 'youtube#playlist':
          $playlists .= sprintf('<li>%s (%s)</li>',
              $searchResult['snippet']['title'], $searchResult['id']['playlistId']);
          break;
      }
    }
//<a class="thumbnail" href="#thumb"><img src="URL de la imagen" width="250px" height="150px" border="0" /><span><img src="URL de la imagen" /><br />Descripción para la foto.</span></a>
    $htmlBody .= <<<END
    <ul>$videos</ul>
END;
  } catch (Google_Service_Exception $e) {
    $htmlBody .= sprintf('<p>A service error occurred: <code>%s</code></p>',
      htmlspecialchars($e->getMessage()));
  } catch (Google_Exception $e) {
    $htmlBody .= sprintf('<p>An client error occurred: <code>%s</code></p>',
      htmlspecialchars($e->getMessage()));
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

    <link rel="stylesheet"  href="css/lightbox_gbl.css"/>
	<link rel="stylesheet" href="css/lightbox.css"/>
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/lightboxController.min.js"></script>
	<script src="js/index.js"></script>

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
                <h1 class="display-2 display-2--light">Esto es lo que buscas </h1>

                <h3 class="subhead">Tus preferencias</h3>
                
                
            </div>
        </div>
        <div class="row contact-contentes" data-aos="fade-up">
    <div class="col-block service-item" data-aos="fade-up">
                <div class="service-text" align="center">
                <div class="contentWrap inner"></div>
			
			
<?=$htmlBody?>
<div style="text-align: left ;width:1200px">
<input type="button" value="Volver" onclick="javascript:history.back(-1);"/>
<!--<a href="javascript:history.back(-1);"  title="Ir la página anterior">Volver</a>-->
 </div>
 </div>
                </div>

 </div>




                
      
        
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


