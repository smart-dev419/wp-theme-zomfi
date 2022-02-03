<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Zomfi
 * @since Zomfi 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="Favicon Icon" type="image/x-icon" href="<?=get_template_directory_uri();?>/images/favicon.ico"/>
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php 
		wp_head(); 

		if(ICL_LANGUAGE_CODE == "es"){
	?>
			<link rel='stylesheet' href='<?=get_template_directory_uri();?>/css/es-custom.css' type='text/css' media='all' />
	<?php
		}
	?>
</head>

<body <?php body_class(); ?>>

<div class="spinner-wrapper">
	<div class="spinner"></div>
</div>

<div id="wrapper">
	<header id="site-header">
		<nav id="nav-fixed">
			<div class="wrapper">
				<div class="header_wrap">
					<div id="branding">
						<a href="<?=home_url()?>">
							<img src="<?=get_template_directory_uri();?>/images/logo.png" alt="brand">
						</a>
					</div>
					<div class="mobile_lang_switch">
						<?php do_action('wpml_add_language_selector'); ?>
					</div>
					<a class="mobile_menu_link" href="javascript:void(0);">
						<span></span>
						<span></span>
						<span></span>
					</a>
					<div class="header_right">
						<?php 
							$menu_attr = array(
								'container_id'    => 'primany-menu',
								'container_class'    => 'menu-wrapper',
								'theme_location'  => 'primary',
								'menu_class'      => 'menu'
								);
							wp_nav_menu( $menu_attr );
						?>
						<div class="header_lang_switch">
							<?php do_action('wpml_add_language_selector'); ?>
						</div>
						<a href="javascript:void(0);" class="main_btn play_btn"><img src="<?=get_template_directory_uri();?>/images/arrow_white.png"> <?php echo __('play', 'zomfi') ?></a>
					</div>
					<div class="mobile_header">
						<a href="<?=home_url()?>" class="mobile_logo">
							<img src="<?=get_template_directory_uri();?>/images/mobile_logo.png" alt="brand">
						</a>
						<a class="mobile_menu_close_link" href="javascript:void(0);">
							<span></span>
							<span></span>
						</a>
						<?php 
							$menu_attr = array(
								'container_id'    => 'mobile-menu',
								'container_class'    => 'menu-wrapper',
								'theme_location'  => 'primary',
								'menu_class'      => 'menu'
								);
							wp_nav_menu( $menu_attr );
						?>
						<ul class="mobile_follow_list">
							<li>
								<a href="javascript:void(0);"><img src="<?=get_template_directory_uri();?>/images/icon_telegram_1.png"></a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="<?=get_template_directory_uri();?>/images/icon_discord_1.png"></a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="<?=get_template_directory_uri();?>/images/icon_twitter_1.png"></a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="<?=get_template_directory_uri();?>/images/icon_youtube_1.png"></a>
							</li>
							<li>
								<a href="javascript:void(0);"><img src="<?=get_template_directory_uri();?>/images/icon_documents_1.png"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header><!-- #header -->

	<main id="site-main">
