<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JM_Custom
 */
global $email, $phone_number, $phone_link, $address, $address_link, $facebook_link, $instagram_link, $twitter_link, $footer_content,$footer_background_image;
?>

<footer class="site-footer" style="background-image: url('<?php echo $footer_background_image; ?>');">
	<div class="sec-wp">
		<div class="container">
			<div class="top-footer">
				<div class="footer-pattern pattern"></div>
				<div class="row">
					<div class="col-lg-6" id="contact">
						<div class="contact-form white-text">
							<div class="contact-title">
								<h4 class="h4-title">contact us</h4>
							</div>
							<?php echo do_shortcode('[contact-form-7 id="17" title="Contact form"]'); ?>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="footer-about">
							<div class="footer-logo">
								<?php the_custom_logo(); ?>
							</div>
							<div class="footer-text white-text">
								<?php echo $footer_content; ?>
							</div>
							<div class="footer-mob-right">
								<div class="footer-info">
									<ul>
										<li><a title="<?php echo $email; ?>" href="mailto:<?php echo $email; ?>"><i class="fab fa-telegram-plane"></i> <?php echo $email; ?></a></li>
										<li><a class="footer-add-link" title="<?php echo $address; ?>" href="<?php echo $address_link; ?>" target="_blank"><i class="fas fa-map-marker-alt"></i> <?php echo $address; ?></a></li>
										<li><a title="<?php echo $phone_number; ?>" href="tel:<?php echo $phone_link; ?>"><i class="fas fa-phone-alt"></i> <?php echo $phone_number; ?></a></li>
									</ul>
								</div>

								<div class="footer-social">
									<ul>
										<li><a title="Follow On Facebook" href="<?php echo $facebook_link; ?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
										<li><a title="Follow On Instagram" href="<?php echo $instagram_link; ?>" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
										<li><a title="Follow On Twitter" href="<?php echo $twitter_link; ?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-footer">
				<div class="row">
					<div class="col-lg-12">
						<div class="footer-menu">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-menu',
								)
							);
							?>
						</div>

						<div class="copyright">
							<div class="footer-bottom-link">
								<ul>
									<li>
										<p>©<?php echo date('Y') ?> Jacobs Fencing</p>
									</li>
									<li><a href="<?php echo home_url(); ?>/privacy-policy/" title="Privacy Policy">Privacy Policy</a></li>
									<li><a href="<?php echo home_url(); ?>/terms-of-use/" title="Terms of Use">Terms of Use</a></li>
									<li><a href="<?php echo home_url(); ?>/cookie-policy/" title="Cookie Policy">Cookie Policy</a></li>
								</ul>
							</div>
							<div class="copyright-right-text">
								<p>Web Design &amp; Digital Marketing with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.dotcomdesign.com" target="_blank" title="Dotcom Design" class="dotcom-link">Dotcom Design</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<a title="<?php echo $phone_number; ?>" href="tel:<?php echo $phone_link; ?>" class="sec-btn cta-btn">Call &nbsp;<span class="callus"><?php echo $phone_number; ?></span></a>

<!-- <a href="javascript:void(0);" id="scrollToTop" class="scrolltop" title="Back To Top"><i class="fas fa-caret-up"></i></a> -->
<div class="overlay hidden"></div>
</body>

</html>