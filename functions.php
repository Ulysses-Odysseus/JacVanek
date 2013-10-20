<?php 
/*==========================*/
/***	Theme Settings 	  ***/
/*==========================*/

//Get WP resets when the 'after_setup_theme' hook is run
add_action( 'after_setup_theme', 'JAC_setup' );

function JAC_setup(){
	require_once( get_template_directory() . '/functions/wordpress_resets.php');
  require_once( get_template_directory() . '/functions/woo_filters.php');
  require_once( get_template_directory() . '/functions/jv_theme_functions.php');
}

/*
//TEMPORARY STUFF IN FUNCTIONS.PHP ONLY (Please Nick just comment out on you version lol)
  //REMOVE ON LIVE SERVER
  add_action('wp_head', 'check_template');
  function check_template() {
    global $template; 
    $template = explode('/', $template);
    $array_count = count($template);
    $array_count = $array_count - 1;
    $template = $template[$array_count];
    ?>
    <div class="notes" style="width:99.3%; background:#eee;padding:5px; z-index:100; font:12px/15px 'courier new';text-align:left;">Template: <?php  print_r($template); ?></div>  
  <?php }
  //REMOVE ON LIVE SERVER
