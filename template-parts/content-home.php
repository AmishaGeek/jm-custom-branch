<?php global  $phone_number, $phone_link; ?>
<section class="main-banner" style="background-image: url('<?php the_field('banner_back_ground_image'); ?>');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text white-text">
                        <!-- <div class="banner-pattern pattern"></div> -->
                        <h1 class="h1-title wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('banner_title'); ?></h1>
                        <p class="wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('banner_sub_title'); ?></p>
                        <div class="banner-btn">
                            <a href="tel:<?php echo $phone_link; ?>" class="sec-btn wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.4s" title="<?php echo $phone_number; ?>">call &nbsp;<span class="callus"><?php echo $phone_number; ?></span></a>
                            <a href="<?php echo get_permalink(273); ?>" class="sec-btn banner-contact-btn wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.5s" title="Contact Us">Contact Us <span><img src="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/images/right-arrow.svg" width="19" height="19" alt="Contact Us Right Arrow"></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-img-wp">
                        <div class="banner-img-pattern pattern wow fadeIn" data-wow-duration="0.8s" data-wow-delay="1s"></div>
                        <div class="banner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.6s" style="background-image: url(<?php the_field('banner_side_image_1'); ?>);"></div>
                        <div class="banner-img wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.7s" style="background-image: url(<?php the_field('banner_side_image_2'); ?>);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of Main Banner -->

<section class="about-sec">
    <div class="sec-wp" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="about-text wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h3 class="h3-title"><?php the_field('about_us_title'); ?></h3>
                        <div class="about-sub-title">
                            <p><?php the_field('about_us_sub_title'); ?></p>
                        </div>
                        <?php the_field('about_content'); ?>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="about-img-wp wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="about-pattern pattern"></div>
                        <div class="about-slider">
                            <?php
                            $images = get_field('about_gallery');
                            if ($images) :
                                foreach ($images as $image) : ?>
                                    <div class="about-slider-img" style="background-image: url(<?php echo esc_url($image['url']); ?>);"></div>
                            <?php
                                endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of About Sec -->

<div class="service-sec" id="services">
    <div class="sec-title text-center">
        <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('service_title'); ?></h2>
    </div>
    <div class="services-wp">
        <?php
        if (have_rows('services_list')) :
            $service_counter = 1;
            while (have_rows('services_list')) : the_row();
                if ($service_counter % 2 == 0) : ?>
                    <section class="service-main">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-5">
                                    <div class="service-img wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <div class="about-pattern pattern"></div>
                                        <div class="back-img" style="background-image: url('<?php the_sub_field('service_list_image'); ?>');"></div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="service-content wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <h3 class="h3-title"><?php the_sub_field('service_list_title'); ?></h3>
                                        <div class="white-text">
                                            <?php the_sub_field('service_list_content'); ?>
                                        </div>
                                        <a href="<?php the_sub_field('service_list_page_link'); ?>" class="learn-more" title="<?php echo strip_tags(get_sub_field('service_list_title')); ?> Learn More">Learn More <span><img src="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/images/right-arrow-2.svg" width="19" height="19" alt="<?php echo strip_tags(get_sub_field('service_list_title')); ?> Right Arrow"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php else : ?>
                    <section class="service-main">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 order-lg-1 order-2">
                                    <div class="service-content wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <h3 class="h3-title"><?php the_sub_field('service_list_title'); ?></h3>
                                        <div class="white-text">
                                            <?php the_sub_field('service_list_content'); ?>
                                        </div>
                                        <a href="<?php the_sub_field('service_list_page_link'); ?>" class="learn-more" title="<?php echo strip_tags(get_sub_field('service_list_title')); ?> Learn More">Learn More <span><img src="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/images/right-arrow-2.svg" width="19" height="19" alt="<?php echo strip_tags(get_sub_field('service_list_title')); ?> Right Arrow"></span></a>
                                    </div>
                                </div>
                                <div class="col-lg-5 order-lg-2 order-1">
                                    <div class="service-img wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <div class="about-pattern pattern"></div>
                                        <div class="back-img" style="background-image: url('<?php the_sub_field('service_list_image'); ?>');"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
        <?php
                endif;
                $service_counter++;
            endwhile;
        endif;
        ?>
    </div>
</div>

<section class="work-sec">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="work-title">
                        <h3 class="h3-title"><?php the_field('our_fences_title'); ?></h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="work-tab white-text">
                        <button class="sec-btn tab-dropdown" type="button"> <span class="gallery-active-menu"></span><span class="caret"></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="other-work-slider">
            <?php
            if (have_rows('our_fences_list')) {
                while (have_rows('our_fences_list')) {
                    the_row(); ?>
                    <div class="work-main-wp">
                        <div class="work-main-content" title="<?php the_sub_field('our_fences_list_title'); ?>" style="background-image: url(<?php the_sub_field('our_fences_list_image'); ?>);"></div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- end of Work Sec -->

<div class="order-sec">
    <section class="cta-custom-work back-img" id="custom-work">
        <div class="back-img" style="background-image: url('<?php the_field('join_background_image'); ?>');"></div>
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="cta-custom-work-text text-center white-text">
                            <h3 class="h3-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('join_title'); ?></h3>
                            <div class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <p><?php the_field('join_sub_title'); ?></p>
                            </div>
                            <div class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                <?php echo do_shortcode('[contact-form-7 id="290" title="Join Us"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of Cta Custom Work -->

    <section class="testimonials-sec" id="review">
        <div class="back-img" style="background-image: url('<?php the_field('testimonial_background_image'); ?>');"></div>
        <div class="container">
            <div class="testimonials-pattern pattern"></div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title text-center">
                        <h3 class="h3-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('testimonial_title'); ?></h3>
                        <div class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <p><?php the_field('testimonial_sub_title'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonials-slider">
                        <?php
                        $args = array(
                            'post_type'  => 'testimonials',
                            'numberposts' => -1,
                            'post_status' => 'publish',
                        );
                        $reviews = get_posts($args);
                        foreach ($reviews as $key => $value) {
                        ?>
                            <div class="testimonials-slider-box">
                                <img class="quote-icon" src="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/images/quote.svg" width="79" height="57" alt="<?php echo $value->post_title; ?>">
                                <div class="overflow-text" data-simplebar=""><?php echo $value->post_content; ?></div>
                                <div class="tes-author">
                                    <p><?php echo $value->post_title; ?></p>
                                </div>
                            </div>
                        <?php  } ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of Testimonials Sec -->
</div>

<?php get_template_part('template-parts/content', 'deals'); ?>

<section id="gallery-sec" class="photo-gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="h3-title text-center wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('gallery_title'); ?></h3>
                <div class="gallery-masonry-box">
                    <div class="gallery-masonry">
                        <?php
                        $images = get_field('gallery_images');
                        if ($images) :
                            $galllery_counter = 1;
                            foreach ($images as $image) : 
                                // echo '<pre>'; print_r( $image['sizes']['medium-height'] ); echo '</pre>';
                                ?>
                                <div class="gallery-img">
                                    <a data-fancybox="Gallery" title="Gallery-Image-<?php echo $galllery_counter; ?>" href="<?php echo esc_url($image['url']); ?>">
                                        <img src="<?php echo esc_url($image['url']); ?>"  data-no-lazy="1" alt="Gallery-<?php echo $galllery_counter; ?>">
                                    </a>
                                </div>
                        <?php
                                $galllery_counter++;
                            endforeach;
                        endif;
                        ?>
                    </div>
                    <div class="custom-loader gallery-loader"><i class="fas fa-spinner"></i></div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of Photo Gallery -->