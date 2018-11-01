<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estedens
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'est_' ); ?></a>
	<header id="masthead" class="site-header">
			<div class='logo'>
				<?php 
					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					}
				?>
			</div>

			<div class='contact'>
				<div class='contact__phone'>
						<a class="" href="tel:+48667946077">
                            667 946 077
                            <span class="icon fas fa-phone-volume header__contact--telicon "></span>
                        </a>
					
				</div>
				<div>
					
				</div>
			
			</div>
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'est_' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav>
	</header>

	<div id="content" class="site-content">
