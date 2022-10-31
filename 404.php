<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package JM_Custom
 */

get_header();
?>

<section class="main-banner inner-banner" style=" background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/10/footer-bg.jpg');">
	<div class="sec-wp">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-text white-text">
						<h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">Oops! That page can’t be found.</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<img src="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/images/404.svg" width="865" height="555" alt="404">
				</div>
			</div>
		</div>
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
