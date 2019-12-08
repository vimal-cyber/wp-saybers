<?php
/*

*/
?>
<!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <!--meta tags-->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="one page business template based on HTML5">
    <meta name="keywords" content="multipage, business, agency, creative, corporate, responsive, clean, modern">
    <meta name="author" content="MouriTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--template title-->
    <title><?php wp_title(); ?></title>

        <!--========== Theme Fonts ==========-->

    <link href="https://fonts.googleapis.com/css?family=Lora:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,800" rel="stylesheet">

    <!--Font Awesome css-->
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/css/font-awesome.min.css">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/css/bootstrap.min.css">

    <!--Magnific popup css-->
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/css/magnific-popup.css">

    <!--Animate css-->
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/css/animate.css">

    <!--icon css-->
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/css/line-icons.min.css">

    <!--Owl carousel css-->
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/css/owl.theme.default.css">



    <!--responsive css-->
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_directory_uri()) ?>/assets/css/responsive.css">
    
    <?php wp_head() ?>

</head>
<body <?php body_class(); ?> >
    <!--preloader starts-->

    <div class="loader_bg"><div class="loader"></div></div>

    <!--preloader ends-->

    <!--navigation area starts-->

    <header class="nav-area navbar-fixed-top" <?php if( get_the_ID() != get_option('page_on_front') ) { echo 'style="background-color: rgba(0,0,0,0.8);"'; } ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="main-menu">
                        <div class="navbar navbar-cus">
                            <div class="navbar-header">
                                <a href="index.html" class="navbar-brand"><?php bloginfo('name'); ?><span><?php if ( function_exists('the_custom_logo' ) ) { the_custom_logo(); } ?></span></a> <!--change the logo here or brand name here-->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse">
                                <nav>
                                    <ul class="nav navbar-nav navbar-right">
                                        <?php 
                                        wp_nav_menu( array( 
                                            'theme_location'  => 'primary',
                                            'container'       => ''
                                
                                        ) );
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
