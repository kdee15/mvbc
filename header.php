<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php wp_head(); ?>

        <link rel="author" href="https://plus.google.com/+YOUR-PROFILE-HERE"/>

        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/favicon.png" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png" rel="apple-touch-icon" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
        <link href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />

		<!-- A. CSS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

        <!-- A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <!-- B. HEAD JS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --> 

        <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery/jquery.min.js"></script>

        <!-- B. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    </head>

    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    <!-- C. WORK AREA ++++++++++++++++++++++++++++++++++++++ -->

        <!-- C.1. MASTHEAD -->

        <header id="masthead">

            <div class="container">

                <!-- C.1.1. TITLE --------------------- -->
                <?php
                  if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php endif;

                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo $description; ?></p>
                  <?php endif;
                ?>

            </div>

        </header>

        <!-- C.1.2. MOBI NAV -->

        <nav class="mobi-nav hide-nav" id="mobi-nav">

            <?php get_template_part( 'inc/navigation-home' ); ?>
          
          <a class="c-hamburger c-hamburger--rot burger reveal" href="#mobi-nav">
                    <span>toggle menu</span>
                </a> 

        </nav>

        <!-- C.2. END -->
        
        <!-- C.3. SOCIAL MEDIA -->

        <?php get_template_part( 'section-social-media' ); ?>
        
        <!-- C.3. END -->