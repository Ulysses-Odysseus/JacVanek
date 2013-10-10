<!DOCTYPE html>
<html>
<head>
    <!-- Meta (Need Favicon)-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
  
    <title>Shop Jac Vanek</title>
  
    <!-- Styling -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" media="all">

    <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" />
    <![endif]-->

    <!-- Javascript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>!window.jQuery && document.write('<script src="/js/jquery-1.10.2.min.js"><\/script>')</script>

    <!-- WP -->
    <?php wp_head(); ?>
</head>
<body>

    <div class="outer-wrap">

    <!-- Sub Header -->
    <div class="wrapper clearfix">
        <div class="container">
            <div class="newsletter left">
                <form>
                    <input class="" type="text" placeholder="Enter Email...">
                    <input class="" type="submit" value="SIGN UP">
                </form>
            </div>
            <div class="right">
                <ul class="left">
                    <li><a href="" target="_top">CUSTOMER CARE</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/my-account" target="_top">MY ACCOUNT</a></li>
                    <li><a class="cart" href="<?php echo get_home_url(); ?>/cart" target="_top">0 ITEMS</a></li>
                </ul>
                <div class="search left">
                    <form>
                        <input type="text" placeholder="Search...">
                        <input type="submit" value="Search">
                    </form>
                </div>
                <ul class="social left">
                    <li><a class="inst" href="" target="_top"></a>Instagram</li>
                    <li><a class="twit" href="" target="_top"></a>Twitter</li>
                    <li><a class="face" href="" target="_top"></a>Facebook</li>
                </ul>
            </div>
        </div>

        <a id="nav-toggle" class="nav-closed" href="#">Open</a>
    </div>

    <div class="container">
        <!-- HEADER
        ================================================== -->
        <header id="home">
            <a class="logo" href="<?php echo get_site_url(); ?>" title="Jac Vanek" target="_top">
                <img src="<?php echo get_template_directory_uri(); ?>/img/jac-vanek-logo.svg" alt="Jac Vanek Logo">
            </a>
            <!-- Menu 
            ---------------------->
            <nav>
                <ul class="linearTrans">
                    <?php //List pages
                    $excl = '13,14,15,16,17,18,19,20,21,22,23';
                    $args = array(
                        'title_li' => __(''), // Remove default title
                        'exclude'  => $excl
                    );
                    wp_list_pages($args);
                    ?>
                </ul>
            </nav>
        </header>