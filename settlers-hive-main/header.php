<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blacksettlers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Yeseva+One&display=swap" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blacksettlers' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-container">
			<div class="site-logo">
					<?php
						the_custom_logo();
					?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> 
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span> 
				</div>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
			</nav><!-- #site-navigation -->
			<div class="more">
				<a href="#">MORE...</a>
			</div>
		</div>

	</header><!-- #masthead -->
