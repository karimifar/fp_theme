<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 *
 * @package fathers_app
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
	<nav class="navbar navbar-expand-lg navbar-inverse bg-inverse">
		<a id="nav-icon" class="navbar-brand" href="#">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/icon-alignedFill.svg" class="d-inline-block align-top" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">

				<?php
					wp_nav_menu( array(
						'theme_location'	=> 'primary',
						'menu_class' 		=> 'primary-menu',
						'container'			=> false,
						'items_wrap'		=> '%3$s',
					));
				?>
			</ul>
		</div>
	</nav>

	<div id="content" class="site-content">
