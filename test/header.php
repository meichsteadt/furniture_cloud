<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory');?>/css/carousel.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/css/main.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Neuton' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="text-center top-bar">View our <strong> current promotions</strong></div>
    <div class="brand"><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a></div>
    <div class="address-bar" id="address"></div>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" id="nameMobile" href="index.html"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php bloginfo('wpurl');?>">Home</a></li>
            <?php wp_list_pages( '&title_li='); ?>              
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About Us <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="contact.html">Contact</a></li>
                <li><a href="brands.html">Brands We Carry</a></li>
                <li><a href="delivery.html">Delivery Information</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>