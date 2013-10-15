<?php
/*
Template Name: Front Page
*/
get_header('shop'); ?>
    
    <!-- Home Slider -->
    <div id="slider" class="slider clearfix">
      <?php //Must have revolution slider plugin installed
      putRevSlider("homeSlider","homepage"); ?>
    </div>
	
	<!-- Show Content -->
    <?php get_template_part('content-page'); ?>
	
<?php get_footer('shop'); ?>