<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inklink
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">

		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<div class="site-branding">
					<a href="<?php the_permalink(); ?>"></a><?php the_custom_logo(); ?>
				</div>
				<div class="head-menu" id="menu">
					<a href="#" id="touch-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
					<nav>
						<ul class="nav accent-color clearfix">
							<li><a href="#">Home</a></li>
							<li><a href="#">Features</a></li>
							<li><a href="#">Categories</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Search</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header><!-- #masthead -->

		<div id="content" class="site-content">
			<div class="container">
				<div class="row">