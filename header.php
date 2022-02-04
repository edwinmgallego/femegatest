<!DOCTYPE html>
<html<?php language_atrributes('charset');?>>
  <head>
    <meta charset="<?php bloginfo();?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">    
    <title > 
    <?php bloginfo( 'name' ); ?>
    <?php is_front_page() ? bloginfo('description'): wp_title();?>
  </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php  bloginfo( 'template_url' )?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php  bloginfo( 'stylesheet_url' )?>/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Inicio</a>
          <a class="blog-nav-item" href="#">Página 1</a>
          <a class="blog-nav-item" href="#">Página 2</a>
          <a class="blog-nav-item" href="#">Página 3</a>
          <a class="blog-nav-item" href="#">Contacto</a>
        </nav>
      </div>
    </div>

    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo( 'name' );?></h1>
        <p class="lead blog-description"<?php bloginfo( 'description' );?></p>
      </div>