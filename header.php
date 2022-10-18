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
global $email, $phone_number, $phone_link, $address, $facebook_link, $instagram_link, $twitter_link;
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

	<link rel="preload" as="image" href="<?php echo home_url(); ?>/wp-content/uploads/2021/03/63727477389__9466bee_0BFdW.jpg">
	<link rel="preload" as="image" href="<?php echo home_url(); ?>/wp-content/uploads/2021/03/high_end_courtyard.jpg">
	<link rel="preload" as="image" href="<?php echo home_url(); ?>/wp-content/uploads/2021/03/img_1297.jpg">
	<link rel="preload" as="image" href="<?php echo home_url(); ?>/wp-content/uploads/2021/03/img_2157.jpg">
	<link rel="preload" as="image" href="<?php echo home_url(); ?>/wp-content/uploads/2021/03/img_3162.jpg">
	<link rel="preload" as="image" href="<?php echo home_url(); ?>/wp-content/uploads/2021/03/img_6512.jpg">
	<link rel="preload" as="image" href="<?php echo home_url(); ?>/wp-content/uploads/2021/03/img_9190.jpg">
	<link rel="preload" as="image" href="<?php echo home_url(); ?>/wp-content/uploads/2021/03/58707832988__7964697_baBTS.jpg">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-194665029-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-194665029-1');
	</script>


	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-TGRL9CL');
	</script>
	<!-- End Google Tag Manager -->
	<!-- Facebook Pixel Code -->
	<script nonce="AP0Qb4Qn">
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window,
			document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

		fbq('init', '152138443565842');
		fbq('set', 'agent', 'tmgoogletagmanager', '152138443565842');
		fbq('track', "PageView");
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=152138443565842&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->


</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGRL9CL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<div id="page" class="site">

		<header class="site-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-2">
						<div class="site-branding">
							<?php
							the_custom_logo();
							?>
						</div><!-- .site-branding -->
					</div>

					<div class="col-lg-10">
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
											<?php
											$val = array("(", ")", " ", "-");
											$replace = array("", "", "", "");
											$phone_link = str_replace($val, $replace, $phone_number);
											?>
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