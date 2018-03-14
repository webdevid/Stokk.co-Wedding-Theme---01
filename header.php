<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Industrial_Metallics_Wedding_Website
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('fixed-menu background-metallics'); ?>>
<div id="page" class="site">
	<!--
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'stokk-co' ); ?></a>
	-->
	<!-- section header -->
	<header class="header-middle fixed-top bg-metallics site-header" id="masthead">
		<div class="container">
			<nav class="navbar navbar-expand-xl">
			<a class="navbar-brand" href="#">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/wedding/logo.svg" height="50" alt="image">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav3">
				<ul class="navbar-nav justify-content-end ml-auto">
					<li class="nav-item active">
						<a class="nav-link js-scroll-trigger" href="#hero-slider">HOME <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#tab-profile">GROOM & BRIDGE</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#rsvp">VENUE</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#gallery-slider">GALLERY</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#blog-slider">BLOG</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#registry">REGISTRY</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-1" href="#"><i class="fa fa-facebook"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-1" href="#"><i class="fa fa-twitter"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link mx-1 mr-2" href="#"><i class="fa fa-instagram"></i></a>
					</li>
				</ul>
					<a href="https://goo.gl/forms/Ebfh0bdRrrkDlpPa2" class="btn btn-wedding  btn-empty">RSVP Now</a>
			</div>
			</nav>
		</div>
	</header>

	<div id="content" class="site-content">



	<?php 
		//echo get_template_part( 'assets/pages/template', 'sections' );
	?>
