<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JM_Custom
 */
global $email, $phone_number, $phone_link, $facebook_link, $instagram_link, $twitter_link;
ob_start();
session_start();
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/fonts/Poppins-Medium.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/fonts/Poppins-Regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/fonts/PlayfairDisplay-SemiBold.woff2" as="font" type="font/woff2" crossorigin>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header class="site-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="site-branding">
							<?php the_custom_logo(); ?>
						</div><!-- .site-branding -->
					</div>

					<div class="col-lg-9">
						<div class="header-right-part">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span><span></span><span></span></button>
								<a class="for-mob header-call-btn" title="<?php echo $phone_number; ?>" href="tel:<?php echo $phone_link; ?>"><i class="fas fa-phone-alt" aria-hidden="true"></i> </a>
								<div class="header-menu">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>

									<div class="header-contact-info for-mob footer-info">
										<ul>
											<li><a title="<?php echo $email; ?>" href="mailto:<?php echo $email; ?>"><i class="fab fa-telegram-plane" aria-hidden="true"></i> <?php echo $email; ?></a></li>
											<li><a title="<?php echo $phone_number; ?>" href="tel:<?php echo $phone_link; ?>"><i class="fas fa-phone-alt" aria-hidden="true"></i> <?php echo $phone_number; ?></a></li>
										</ul>
										<a href="javascript:void(0);" class="sec-btn" data-toggle="modal" data-target="#getEstimate" title="Get an Estimate">Get an Estimate</a>
										<div class="header-mob-pattern pattern for-mob"></div>
									</div>
								</div>
							</nav>

							<div class="header-social-icon">
								<ul>
									<li><a title="Follow On Facebook" href="<?php echo $facebook_link; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
									<li><a title="Follow On Instagram" href="<?php echo $instagram_link; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
									<li><a title="Follow On Twitter" href="<?php echo $twitter_link; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

		</header><!-- #masthead -->