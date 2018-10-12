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

	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/favicon.png" />
	<link href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/apple-touch-icon.png" rel="apple-touch-icon" />
	<link href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/apple-touch-icon-76x76.png" rel="apple-touch-icon" sizes="76x76" />
	<link href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/apple-touch-icon-120x120.png" rel="apple-touch-icon" sizes="120x120" />
	<link href="<?php echo get_template_directory_uri(); ?>/dist/images/icons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />

	<!-- A. CSS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/libraries/bootstrap/bootstrap.min.css">

<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/hacks.css">

	<!-- A. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

	<!-- B. HEAD JS +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!--	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

	<script src="<?php bloginfo('template_url'); ?>/dist/js/components/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/dist/js/components.js"></script>

	<!-- B. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

</head>

<body <?php body_class(); ?>>
	
	<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->

<!-- C. WORK AREA ++++++++++++++++++++++++++++++++++++++ -->

	<!-- C.1. MASTHEAD -->

	<header id="masthead">

		<div class="container">

			<!-- C.1.1. Logo -->
			<a href="<?php bloginfo('url'); ?>" class="logo-link">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/site/logo.png" alt="" class="logo"/>
			</a>

			<!-- C.1.2. Navigation -->
			<nav class="main-nav" id="main-nav">

					<!-- C.1.1. Logo -->
					<?php get_template_part( 'inc/navigation-page' ); ?>

			</nav>

			<a class="c-hamburger c-hamburger--rot burger reveal" href="#mobi-nav">
					<span>toggle menu</span>
			</a> 

		</div>

	</header>

	<!-- C.1.2. MOBI NAV -->
	<nav class="mobi-nav hide-nav" id="mobi-nav">
			<?php get_template_part( 'inc/navigation-page' ); ?>
	</nav>

	<!-- C.1. END -->