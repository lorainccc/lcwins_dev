<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package LCCC Framework
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="hide-for-large-up">
		<div class="contain-to-grid sticky">
				<div class="fixed">
						<nav class="top-bar" data-topbar role="navigation">
					<ul class="title-area">
							<li class="name">
					
							</li>
								<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
							<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
					</ul>
					<section class="top-bar-section">
							<!-- Right Nav Section -->
							<ul class="right">
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							</ul>
					</section>
			</nav>
			 </div>	
		</div>
	</div>
<div class="row">
	<div class="small-12 medium-12 large-12 columns  mainbackground">
	<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lccc-framework' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
				<div class="small-12 medium-6 large-6 columns">
				<div id="lcwins-logo">
								<img src='<?php echo get_stylesheet_directory_uri();  ?>/images/win-logo.png' border="0" />
		</div><!-- #lcwins-logo -->
				</div>
			<div class="small-12 medium-6 large-6 columns">
				<div class="small-12 medium-12 large-12 columns brandinglogos">
				<div id="jvsheaderlogo">
						<a href="http://www.lorainccc.edu"><img src='<?php echo get_stylesheet_directory_uri();  ?>/images/lcjvs-logo.png' border="0" />						</a>
				</div>	
				<div id="lcccheaderlogo">
						<a href="http://www.lorainccc.edu"><img src='<?php echo get_stylesheet_directory_uri();  ?>/images/lccc-logo.png' border="0" />						</a>
				</div>
				</div>
				<div class="small-12 medium-12 large-12 columns">
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</div>
			</div>
		</div><!-- .site-branding -->
<div class="show-for-large-up">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'after' => '</li> <li class="primary-menu-divider">|'  ) ); ?>
		</nav><!-- #site-navigation -->
</div>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
