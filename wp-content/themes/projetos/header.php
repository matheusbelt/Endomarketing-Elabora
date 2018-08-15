<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700" rel="stylesheet">

	<script src="http://mynameismatthieu.com/WOW/dist/wow.min.js"></script> <!-- wow animation -->
	<script>
	  new WOW().init();
	</script>
	<?php wp_head(); ?>
</head>
<style>
	.foguete-voando{
		background: url('<?php echo get_theme_file_uri("/assets/images/foguete-voando.png") ?>');
		background-repeat: no-repeat;
		background-position: bottom;
		width: 100%;
		height: 100%;
		position: fixed;
		bottom: 0px;
		left: 0;
		z-index: -1;
	}
	.fumaca{
		background: url('<?php echo get_theme_file_uri("/assets/images/foguete.png") ?>');
		background-repeat: no-repeat;
		background-position: bottom;
		width: 100%;
		height: 100%;
		position: absolute;
		bottom: 0;
		left: 0;
		z-index: -1;
	}
	/*.bg-body{
		background: url('<?php echo get_theme_file_uri("/assets/images/bg-body.png") ?>');
		background-repeat: repeat-y;
		background-position: center;
		width: 100%;
		height: 100%;
		position: absolute;
		z-index: -2;
	}*/
	@font-face {
	    font-family: Orator;
	    src: url(<?php echo get_theme_file_uri("/assets/fonts/OratorStd.otf"); ?>);
	}
</style>
<body <?php body_class(); ?>>
	<div class="foguete-voando"></div>
	<div class="fumaca"></div>
	<div class="bg-body"></div>

	<header id="header" class="true-header" role="banner">
		<div class="container">
		<div class="header">
			<div class="page-header hidden-xs">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Elabora</a>
				</h1>
			</div><!-- .page-header-->

			<div></div>

			<div id="main-navigation" class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
					<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand visible-xs-block" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</div>
				<nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
					<ul class="nav-menu">
						<a href="#sobre"><li class="nav-menu__li">Atividades</li></a>
						<a href="#habilidades"><li class="nav-menu__li">projetos</li></a>
						<a href="#experiencias"><li class="nav-menu__li">Membros</li></a>
						<a href="#contato" class="nav-menu__li--button"><li class="nav-menu__li nav-menu__li--white">Adicionar atividade</li></a>
					</ul>
				</nav><!-- .navbar-collapse -->
			</div><!-- #main-navigation-->

		</div> <!-- .header -->
		</div><!-- .container-->
	</header><!-- #header -->

	<div class="padding-body"></div>

