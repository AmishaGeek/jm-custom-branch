<section class="main-banner inner-banner" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/Gallery_EntryDoor_2.jpg');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-text white-text wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="banner-pattern pattern"></div>
                        <h1 class="h1-title">doors</h1>
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
                        <h2 class="h2-title">style & security</h2>
                        <p>JM Custom Iron Work combines sheer strength with stylish design in manufacturing and installing iron doors. Our custom fabrication standards guarantee that the entry to your home will be one of a kind, providing unparalleled security while also improving the overall aesthetics and increasing property value.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img-wp wow left-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                        <div class="about-pattern pattern"></div>
                        <div class="about-pattern2 pattern"></div>
                        <div class="about-slider">
                            <div class="about-slider-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/door-slider-img-1.jpg);"></div>
                            <div class="about-slider-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/door-slider-img-2.jpg);"></div>
                            <div class="about-slider-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/door-slider-img-3.jpg);"></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="about-ser-row about-door-row">
                <div class="row">
                    <div class="col-lg-6 wow right-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="about-ser-img-wp">
                            <div class="about-ser-pattern pattern"></div>
                            <div class="about-ser-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/doors-about-img.jpg');"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-ser-text wow left-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                            <h2 class="h2-title">Entry Doors</h2>
                            <p>Let your structure radiate sturdiness and style in equal measure. Choose an entry door that reflects who you are through ornamental iron design and detailed finishes. Rely on our talented team of craftsmen to provide optimal security and a sense of luxury as well.</p>
                            <h2 class="h2-title">Security Doors</h2>
                            <p>Add an extra layer of protection to your home exterior, keeping out intruders as well as the elements. Accept no compromise when it comes to safety. Rely on our expert engineering team to use the most robust materials and optimal installation techniques.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!-- end of About Sec -->

<?php
get_template_part('template-parts/content', 'testimonial');
?>
<?php
$active_slug = "entry-doors";
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
                        while (have_rows('service_gallery', 5)) {
                            the_row();
                            $active_cat = get_sub_field('gallery_service')[0];
                            if ($active_cat == "doors") {
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
                        <?php
                        $active_slug = "entry-doors";
                        if (have_rows('service_gallery',5)) {
                            while (have_rows('service_gallery',5)) {
                                the_row();
                                $data_slug = strtolower(str_replace(" ", "-", get_sub_field('service_name')));
                                if ($data_slug == $active_slug) {
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