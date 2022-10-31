<?php global $email, $phone_number, $phone_link, $address, $address_link, $facebook_link, $instagram_link, $twitter_link, $footer_content; ?>
<section class="main-banner inner-banner" style="background-image: url('<?php the_field('banner_image'); ?>');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-text white-text wow fadeup-animation" data-wow-duration="1s"
                        data-wow-delay="0.2s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeup-animation;">
                        <h1 class="h1-title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-sec white-form">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1 order-2 wow right-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="about-text">
                        <h4 class="h4-title"><?php the_field('title'); ?></h4>
                        <?php echo $footer_content; ?>
                    </div>
                    <div class="footer-info">
                        <div>
                            <ul>
                                <li><a title="<?php echo $email; ?>" href="mailto:<?php echo $email; ?>"><i class="fab fa-telegram-plane" aria-hidden="true"></i><?php echo $email; ?></a></li>
                                <li><a class="footer-add-link" title="<?php echo $address; ?>" href="<?php echo $address_link; ?>" target="_blank"><i class="fas fa-map-marker-alt" aria-hidden="true"></i><?php echo $address; ?></a></li>
                                <li><a title="<?php echo $phone_number; ?>" href="tel:<?php echo $phone_link; ?>"><i class="fas fa-phone-alt" aria-hidden="true"></i> <?php echo $phone_number; ?></a></li>
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
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="about-img-wp wow left-animation" data-wow-duration="1s" data-wow-delay="0.3s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: left-animation;">
                        <div class="about-pattern2 pattern"></div>
						<div class="contact-form">
							<div class="contact-title">
								<h4 class="h4-title">contact us</h4>
							</div>
							<?php echo do_shortcode('[contact-form-7 id="17" title="Contact form"]'); ?>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>