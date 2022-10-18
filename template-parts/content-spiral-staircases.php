<section class="main-banner inner-banner" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/main-banner-bg.jpg');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-text white-text wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="banner-pattern pattern"></div>
                        <h1 class="h1-title">spiral staircases</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of Main Banner -->

<section class="about-sec">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text wow right-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="h2-title">make a statement</h2>
                        <p>Visually attractive yet highly practical, spiral staircases are a perfect blend of functionality and style. Strong, durable, and creatively ornamented, they’ll enrich your living space like few other architectural fixtures can.</p>
                        <p>JM Custom Iron Work, your go-to source for quality ironwork in the greater Phoenix metro area, specializes in spiral staircases. Whether you’re going for pure functionality or something more rustic and ornamental, we can make it work. Every piece is custom-fabricated, and uniquely beautiful designs are the standard we’ve set for ourselves.</p>
                        <p>We also offer powder coating for that special finishing touch. Choose from hundreds of colors to make that staircase stand out or blend perfectly with the rest of the structure, according to style preference.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img-wp wow left-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="about-pattern pattern"></div>
                        <div class="about-pattern2 pattern"></div>
                        <div class="about-slider">
                            <div class="about-slider-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/spiral-staircases-slider-img-1.jpg);"></div>
                            <div class="about-slider-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/spiral-staircases-slider-img-2.jpg);"></div>
                            <div class="about-slider-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/spiral-staircases-slider-img-3.jpg);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of About Sec -->

<?php
	get_template_part( 'template-parts/content', 'testimonial' );
?>

<section class="photo-gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">Photo Gallery</h2>

                <div class="gallery-masonry-box wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                
                    <div class="gallery-masonry">
                        <?php
                        $active_slug = "spiral-staircases";
                        if(have_rows('service_gallery',5)){
                            while(have_rows('service_gallery',5)){ the_row();
                                $data_slug = strtolower(str_replace(" ","-", get_sub_field('service_name')));
                                if($data_slug == $active_slug){
                                    $gallery_counter=1;
                                    $gallery = get_sub_field('gallery_images');
                                    foreach ($gallery as $key => $image) {
                                        ?>
                                        <a title="<?php echo get_sub_field('service_name').' '.$gallery_counter; ?>" href="<?php echo $image['url']; ?>" data-fancybox="<?php echo $active_slug; ?>">
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo get_sub_field('service_name').' '.$gallery_counter; ?>">
                                        </a>
                                        <?php
                                        $gallery_counter++;
                                    }
                                }
                            }
                        }
                        ?>
                    </div>
                    <div class="custom-loader gallery-loader"><i class="fas fa-spinner"></i></div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of Photo Gallery -->