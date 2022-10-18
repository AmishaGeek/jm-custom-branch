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
global $email, $phone_number, $address, $facebook_link, $instagram_link, $twitter_link;
?>

<footer class="site-footer" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/footer-back-img.jpg');">
	<div class="sec-wp">
		<div class="container">
			<div class="top-footer">
				<div class="row">
					<div class="col-lg-7 wow right-animation" data-wow-duration="1s" data-wow-delay="0.2s" id="contact">
						<div class="contact-form white-text">
							<div class="contact-title">
								<h2 class="h2-title">contact us</h2>
								<p>Please include a picture of your preferred design along with rough dimensions to expedite the quoting process. Thank you!</p>
							</div>
							<?php echo do_shortcode('[contact-form-7 id="17" title="Contact form"]'); ?>
						</div>
					</div>
					<div class="col-lg-5 wow left-animation" data-wow-duration="1s" data-wow-delay="0.3s">
						<div class="footer-about">
							<div class="footer-logo">
								<a title="JM Custom Iron Work" href="<?php echo home_url(); ?>"><img src="<?php echo home_url(); ?>/wp-content/uploads/2021/03/footer-logo.png" alt="JM Custom Iron Work"></a>
							</div>

							<div class="footer-mob-right">
								<div class="footer-info">
									<ul>
										<li><a title="<?php echo $email; ?>" href="mailto:<?php echo $email; ?>"><i class="fab fa-telegram-plane"></i> <?php echo $email; ?></a></li>
										<li><a class="footer-add-link" title="<?php echo $address; ?>" href="https://maps.google.it/maps?q=<?php echo urlencode(str_replace("<br/>", "", $address)); ?>" target="_blank"><i class="fas fa-map-marker-alt"></i> <?php echo $address; ?></a></li>
										<?php
										$val = array("(", ")", " ", "-");
										$replace = array("", "", "", "");
										$phone_link = str_replace($val, $replace, $phone_number);
										?>
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
									'theme_location' => 'menu-1',
								)
							);
							?>
						</div>

						<div class="copyright">
							<div class="footer-bottom-link  wow fadeup-animation" data-wow-duration="0.8s" style="visibility: visible; animation-duration: 0.8s; animation-name: fadeup-animation;">
								<ul>
									<li>
										<p>©<?php echo date('Y') ?> JM Custom Iron Work</p>
									</li>
									<li><a href="<?php echo home_url(); ?>/privacy-policy/" title="Privacy Policy">Privacy Policy</a></li>
									<li><a href="<?php echo home_url(); ?>/terms-of-use/" title="Terms of Use">Terms of Use</a></li>
									<li><a href="<?php echo home_url(); ?>/cookie-policy/" title="Cookie Policy">Cookie Policy</a></li>
								</ul>
							</div>
							<div class="copyright-right-text  wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeup-animation;">
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

<div class="modal center-modal-view" id="getEstimate">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<button type="button" class="close" data-dismiss="modal">&times;</button>

			<div class="modal-body overflow-text" data-simplebar="">
			<div class="contact-title">
				<h2 class="h2-title">contact us</h2>
				<p>Please include a picture of your preferred design along with rough dimensions to expedite the quoting process. Thank you!</p>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="150" title="Get an Estimate form"]'); ?>
			</div>


		</div>
	</div>
</div>
<?php wp_footer(); ?>

<a title="Get an Estimate" href="javascript:void(0);" class="sec-btn cta-btn" data-toggle="modal" data-target="#getEstimate">Get an Estimate</a>

<!-- <a href="javascript:void(0);" id="scrollToTop" class="scrolltop" title="Back To Top"><i class="fas fa-caret-up"></i></a> -->
<div class="overlay hidden"></div>
</body>

</html>