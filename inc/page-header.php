
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