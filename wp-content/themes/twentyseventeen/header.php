<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
    <!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- SEO -->
        <meta name="description" content="150 words">
        <meta name="author" content="uipasta">
        <meta name="copyright" content="company name">
        <meta name="robots" content="index,follow">
        <title>EyePlus - Media</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/favicon.iso.png">
        <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon"
              href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon/apple-touch-icon.png">

        <!-- All CSS Plugins -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/plugin.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri(); ?>/assets/css/style.css">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
              href="<?php echo get_theme_file_uri(); ?>/assets/fonts/font-awesome/css/font-awesome.min.css">
        <!-- Sweelalert -->
        <link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/sweetalert/sweetalert.css">

        <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="<?php  echo get_theme_file_uri(); ?>/assets/js/html5shiv.min.js"></script>
        <script src="<?php  echo get_theme_file_uri(); ?>/assets/js/respond.min.js"></script>
        <![endif]-->


        <?php wp_head(); ?>
    </head>
<?php if (is_front_page()) { ?>

    <body <?php body_class(); ?> >

    <!-- Section Intro Slider ====================== -->
    <div id="carousel-example-generic" class="carousel intro slide">


        <!-- Wrapper for slides -->
        <div class="carousel-inner home-section-background" role="listbox">

            <!-- First slide -->
            <div class="item active"
                 style="background-image:url(<?php echo get_theme_file_uri(); ?>/assets/images/bg/bgvideo.png)">
                <button   type="button" class="btn-pause-media isplay">
                <div class="carousel-caption">
                    <div class="" data-stellar-background-ratio="0.6">
                        <div class="col-md-12 text-center">
                            <div class="header-text">
                                <p class="txtWel">Welcome to</p>
                                <p class="logo-banner"><img
                                            src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/logo-white.png">
                                </p>
                                <h2><span class="typing"></span></h2>

                            </div>
                        </div>
                    </div>

<!--                    <div class="video-background">-->
<!--                        <div class="video-foreground" id="videobg">-->
<!--                            <div class="op05"></div>-->
<!--                            <iframe id="eyeplusvideo" src="https://www.youtube.com/embed/A6SACYhQqEk?controls=0&showinfo=0&rel=0&autoplay=1&loop=1" frameborder="0" allowfullscreen></iframe>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="op05"></div>
                    <video autoplay poster="<?php echo get_theme_file_uri(); ?>/assets/video/bgvideo.png" id="videobg" loop>
                        <source src="<?php echo get_theme_file_uri(); ?>/assets/video/720.mp4" type="video/mp4">
                    </video>
                </div></button>
            </div>
        </div>
        <!-- /.carousel-inner -->
        <!-- Controls (currently displayed none from responsive.css-video)-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /.carousel -->


    <!-- Home & Menu Section Start -->
    <header id="home" class="home-section">
        <div class="header-top-area">

            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="/"><img
                                        src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/Logo-EyePlus.png"></a>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar white-bar"></span>
                                        <span class="icon-bar white-bar"></span>
                                        <span class="icon-bar white-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <?php wp_nav_menu(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Home & Menu Section End-->
<?php } else { ?>
    <body class="pageIn">
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=2200846233474029";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<header id="home" class="home-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 listLink">
                    <a href="http://blogtamsu.vn/" target="_blank">Blog tâm sự </a>
                    <a href="http://kenhthethao.vn/" target="_blank"> Kênh thể thao </a>
                    <a href="http://feedy.vn/" target="_blank"> Feedy </a>
                    <a href="http://1news.video/" target="_blank"> 1new.video</a>
                </div>
                <div class="right col-lg-8">
                    <div class="right box-seach">
                        <?php get_search_form(); ?>

                    </div>
                    <div class="right share col-xs-3">
                        <div class="block_social_page">
                            <div class="fb-like" data-href="https://www.facebook.com/Eyeplusmedia" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-top-area">
        <div class="container">
            <div class="row">

                <div class="col-sm-3">
                    <div class="logo">
                        <a href="<?php echo get_site_url(); ?>"><img
                                    src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/Logo-EyePlus.png"></a>
                    </div>
                </div>

                <div class="col-sm-9">
                    <div class="navigation-menu">
                        <div class="navbar">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <?php wp_nav_menu(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Home & Menu Section End-->
<?php } ?>