<section class="main-banner inner-banner" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/Gallery_YardGate_4.jpg');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-text white-text wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="banner-pattern pattern"></div>
                        <h1 class="h1-title">GATES & FENCES</h1>
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
                        <h2 class="h2-title">PRIVACY AND ELEGANCE</h2>
                        <p>JM Custom Iron Work has decades of experience designing and installing gated fences around residential and commercial properties. We know what it takes to provide privacy without sacrificing anything on accessibility or appearance. Whether you’re looking to secure your entryway, pool area, or entire property, our custom-fabricated solutions will serve you well.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img-wp wow left-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="about-pattern pattern"></div>
                        <div class="about-pattern2 pattern"></div>
                        <div class="about-slider">
                            <div class="about-slider-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/gates-fences-slider-img-1.jpg);"></div>
                            <div class="about-slider-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/gates-fences-slider-img-2.jpg);"></div>
                            <div class="about-slider-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/gates-fences-slider-img-3.jpg);"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-ser-row about-door-row">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-ser-img-wp wow right-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="about-ser-pattern pattern"></div>
                            <div class="about-ser-img" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/03/courtyard-gets-img-1.jpg);"></div>
                            <div class="about-ser-img about-ser-img2" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/03/interior-staircases-gets-img.jpg);"></div>
                            <div class="about-ser-pattern about-ser-pattern2 pattern"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-ser-text wow left-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                            <h2 class="h2-title">Courtyard Gates</h2>
                            <p>Ornamental iron gates for your courtyard – unparalleled structural solidity, innovative design, expertly installed to fit the surrounding property. Full ironwork or combined with stain-resistant wood.</p>
                            <h2 class="h2-title">Yard Gates</h2>
                            <p>Custom-built iron gates for your backyard or front yard – sturdy and secure, designed and installed with full attention to detail. Pedestrian or vehicular access, fully customizable.</p>
                            <h2 class="h2-title">Exterior Railings</h2>
                            <p>Durable iron railings for your balconies and decks, patios and porches. High-quality materials, expert installation. Powder-coated, stylish, and weather-resistant.</p>
                            <h2 class="h2-title">Interior Railings</h2>
                            <p>Elegant iron railings for your interior staircases and stairwells. Expertly fabricated from high-quality material, installed up to code. Suitable for residential or commercial properties alike.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of About Sec -->
<?php get_template_part('template-parts/content', 'testimonial');?>

<?php
$active_slug = "courtyard-gates";
$cookie_name = "other_work";
if(isset($_COOKIE[$cookie_name])) {
    $active_slug = $_COOKIE[$cookie_name];
    $cookie_value = "";
    setcookie($cookie_name, $cookie_value, time() -3600, "/"); 
}
?>
<section class="photo-gallery" id="gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">Photo Gallery</h2>
                <div class="gallery-tab wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                <button class="sec-btn tab-dropdown" type="button" > <span class="gallery-active-menu"><?php echo ucfirst(str_replace("-", " ", $active_slug)) ?></span><span class="caret"></span></button>
                    <ul class="dropdown-tabbing">
                    <?php
                    $i = 1;
                    if (have_rows('service_gallery', 5)) {
                        while (have_rows('service_gallery', 5)) {the_row();
                            $active_cat = get_sub_field('gallery_service')[0];
                            if ($active_cat == "gates-fences") {
                                $data_slug = strtolower(str_replace(" ", "-", get_sub_field('service_name')));
                                if ($active_slug == $data_slug) {
                                    ?>
                                    <li class="gallery-active-tab" data-id="<?php echo $data_slug; ?>"><?php the_sub_field('service_name') ?></li>
                                    <?php
                                } else {
                                    ?>
                                    <li data-id="<?php echo $data_slug; ?>"><?php the_sub_field('service_name') ?></li>
                                    <?php
                                }
                                $i++;
                            }
                        }
                    }
                    ?>
                    </ul>
                </div>
                <div class="gallery-masonry-box wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="gallery-masonry">
                        <?php if (have_rows('service_gallery', 5)) {
                            while (have_rows('service_gallery', 5)) {the_row();
                                $data_slug = strtolower(str_replace(" ", "-", get_sub_field('service_name')));
                                if ($data_slug == $active_slug) {
                                    $gallery_counter=1;
                                    $gallery = get_sub_field('gallery_images');
                                    foreach ($gallery as $key => $image) { ?>
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