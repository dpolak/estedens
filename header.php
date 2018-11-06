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

<div id="page" class="site l-main-wrapper">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'est_' ); ?></a>
	<header id="masthead" class="l-container site-header">
			<div class='c-logo'>
				<?php 
					if ( function_exists( 'the_custom_logo' ) ) {
						the_custom_logo();
					}
				?>
			</div>
			<div class='l-container l-container--column c-contact-card'>
				<div class='c-contact-card__row'>
						<a class=" c-btn c-btn--primary c-btn--phone" href="tel:<?php the_field('contact__telephone', 23);?>">
							<?php the_field('contact__telephone', 23);?>
							<span class='c-icon c-icon--phone fas fa-phone'></span>												
						</a>
						
				</div>
				<div class='c-contact-card__row'>
					<a href="<?php the_field('contact__gmaps', 23);?>" class='c-btn c-btn--secondary c-btn--address'>
						<span class='contact-header__address'><?php the_field('contact__address', 23);?></span>	
						<span class=' c-icon c-icon--address fas fa-map-marker-alt'></span>	
					</a>
				
					
					<a  href="<?php the_field('contact__fb', 23);?>">
						<span class='c-icon c-icon--facebook fab fa-facebook-f'>
					</a>
					
					
											
				</div>
			</div>
			<div class='nav c-nav-desktop'>
				<nav id="site-navigation" class="c-desktop-nav__wrapper main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'est_' ); ?></button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav>
			</div>
	</header>

	<div id="content" class="site-content">
