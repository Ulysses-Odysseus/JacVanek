<!DOCTYPE html>
<html>

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>"/>
  
  <title>Blog Jac Vanek</title>
  
  <!-- Styling -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" media="all">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" media="all">

  <!-- Javascript -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>!window.jQuery && document.write('<script src="/js/jquery-1.10.2.min.js"><\/script>')</script>

  <!-- WP -->
  <?php wp_head(); ?>

</head>

<body>
  <div id="container">
  
    <!-- HEADER 
    ================================================== -->
    <header>
      <a href="./" title="Jac Vanek" target="_top">
        <img src="<?php echo get_template_directory_uri(); ?>/img/jac-vanek-logo.png" alt="Jac Vanek Logo">
      </a>
      <!-- Categories Bar 
      ---------------------->
      <nav>
        <ul class="linearTrans">
          <li><a href="">ITEM</a></li>
          <li><a href="">ITEM</a></li>
          <li><a href="">ITEM</a></li>
          <li><a href="">ITEM</a></li>
          <li><a href="">ITEM</a></li>
          <li><a href="">ITEM</a></li>
          <li><a href="">ITEM</a></li>
          <li><a href="">ITEM</a></li>
        </ul>
      </nav>
    </header>