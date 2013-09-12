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
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" media="all">

  <!-- Javascript -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>!window.jQuery && document.write('<script src="/js/jquery-1.10.2.min.js"><\/script>')</script>

  <!-- WP -->
  <?php wp_head(); ?>

</head>

<body>

  <!-- Back to Shop Button -->
  <span class="shopBtn linearTrans">
    <p>&larr;&nbsp;<a href="" target="_top" title="Back to Shop">BACK TO SHOP</a></p>
  </span>

  <div id="container">
  
    <!-- HEADER 
    ================================================== -->
    <header>
      <a href="<?php echo get_site_url(); ?>" title="Jac Vanek" target="_top">
        <img src="<?php echo get_template_directory_uri(); ?>/img/jac-vanek-logo.png" alt="Jac Vanek Logo">
      </a>
      <!-- Categories Bar 
      ---------------------->
      <nav>
        <ul class="linearTrans">
            <?php
              $args = array(
                'title_li' => __('') // Remove default title
              );
              wp_list_categories($args);
            ?>
        </ul>
      </nav>
    </header>