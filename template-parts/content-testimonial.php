<section class="testimonials-sec" id="review">
    <div class="container">
        <div class="testimonials-pattern pattern"></div>
        <div class="row">
            <div class="col-lg-12 wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="testimonials-slider">
                    <?php
                    $args = array(
                        'post_type'  => 'testimonials',
                        'numberposts'=> -1,
                        'post_status'=> 'publish',
                    );
                    $reviews = get_posts( $args );
                    foreach ($reviews as $key => $value) {
                        ?>
                        <div class="testimonials-slider-box">
                            <img class="quote-icon" src="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/images/quote-icon.svg" data-no-lazy="1" alt="<?php echo $value->post_title;?>">
                            <div class="overflow-text" data-simplebar=""><?php echo wpautop($value->post_content);?></div>
                            <h6 class="sub-title"><?php echo $value->post_title;?></h6>
                        </div>
                    <?php  } ?>	
                 

                </div>

                <div class="testimonials-google wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/images/google-reviews.png" alt="Google Reviews">
                    <a title="More Reviews on Google" href="https://www.google.com/search?ei=HCdHYIDcN47btQabiqgI&q=jm+custom+iron+work+arizona&oq=jm+custom+iron+work+arizona&gs_lcp=Cgdnd3Mtd2l6EAMyBggAEBYQHjoECAAQRzoCCAA6BQgAEM0CUI0FWOsOYPQPaABwA3gAgAHTAYgBjQeSAQU3LjEuMZgBAKABAaoBB2d3cy13aXrIAQTAAQE&sclient=gws-wiz&ved=0ahUKEwiA2sOk26LvAhWObc0KHRsFCgEQ4dUDCA0&uact=5#lrd=0x872b07cd95f2b6eb:0xbf79b14e779ed4eb,1,," target="_blank">More Reviews on Google</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of Testimonials Sec -->