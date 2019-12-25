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
    <!--Comments js power wp-->
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<style> 
    div.navbar-collapse.collapse.in,
    header.nav-area.navbar-fixed-top.sticky_navigation {
        background-color:<?php echo get_theme_mod( 'nav_bg_color', '#ffffff;' ) ?>
    }
    .navbar-brand,
    div.menu > ul li a,
    .sticky_navigation div.menu > ul li a,
    .sticky_navigation .navbar-brand {
        color:<?php echo get_theme_mod( 'nav_text_color', '#000000' ) ?>!important;
    }
    div.menu > ul li.current_page_item > a,
    .sticky_navigation div.menu > ul li.current_page_item > a {
        color:<?php echo get_theme_mod( 'nav_text_active_color', '#bb8c4b' ) ?>!important;
    }
    
    .section-header h2 {
        color:<?php echo get_theme_mod( 'heading_color', '#333333;' ) ?>/*headings */
    }
    .section-header .line::before,
    .section-header .line::after {
        background:<?php echo get_theme_mod( 'line_color', '#333333') ?>/*underline*/
    }
    p.sub-head {
        color:<?php echo get_theme_mod( 'one_line_color', '#333333') ?>/*one line dec*/
    }
    /* all black text */
    div.single-about p,
    h4,
    ul.port-nav-list li a,
    h3,
    body,
    .opening-hours-wrap h3 {
        color:<?php echo get_theme_mod( 'black_text_color', '#333333') ?>
    }
    /* all white text */
    .topcontrol,
    .team-social-icons a,
    a.bordered-btn,
    .blog-content .btn,
    .btn.btn-send,
    .footer-bottom p {
        color:<?php echo get_theme_mod( 'white_text_color','#ffffff') ?>
    }
    /* brown background */
    .topcontrol,
    .team-social-icons,
    a.bordered-btn,
    .blog-content .btn:hover,
    .btn.btn-send {
        background:<?php echo get_theme_mod( 'brown_bg_color', '#bb8c4b;' ) ?>
    }
    /*Footer color*/
    div.block.side-widget h3 {
    color: <?php echo get_theme_mod( 'foot_hd_color', '#e64747' ) ?>
    }
    .side-widget li,
    div.block.side-widget p,
    .side-widget li a {
    color: <?php echo get_theme_mod( 'foot_link_color', '#ea9c2c' ) ?>;
    }
    /* Scree size */
    @media only screen and (max-width: 767px) {
        div.menu > ul li a {
            color:<?php echo get_theme_mod( 'nav_text_color', '#000000' ) ?>!important;
        }
        div.menu > ul li.current_page_item > a {
            color:<?php echo get_theme_mod( 'nav_text_active_color', '#bb8c4b' ) ?>!important;
        }
    }
</style>
    
    <?php wp_head() ?>

</head>
<body class="no_bg" <?php body_class(); ?> >
    <!--preloader starts-->

    <div class="loader_bg"><div class="loader"></div></div>

    <!--preloader ends-->

    <!--navigation area starts-->

    <header class="nav-area navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="main-menu">
                        <div class="navbar navbar-cus">
                            <div class="navbar-header">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand"><?php bloginfo('name'); ?><span><?php if ( function_exists('the_custom_logo' ) ) { the_custom_logo(); } ?></span></a> <!--change the logo here or brand name here-->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse">
                                <nav>
                                    <?php 
                                    wp_nav_menu( array( 
                                        'theme_location'  => 'primary',
                                    ) );
                                    ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
