<?php 
global $email , $phone_number , $phone_link,$address ,$facebook_link ,$instagram_link ,$twitter_link;
?>
<section class="main-banner" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/main-banner-bg.jpg');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text white-text">
                        <div class="banner-pattern pattern"></div>
                        <h1 class="h1-title wow left-animation" data-wow-duration="1s">Great Work Speaks For Itself</h1>
                        <h5 class="h5-title wow left-animation" data-wow-duration="1s" data-wow-delay="0.2s">Custom Ornamental Iron for Your Home & Business </h5>
                        <div class="banner-btn wow left-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                            <a title="Get an Estimate" href="javascript:void(0);" class="sec-btn" data-toggle="modal" data-target="#getEstimate">Get an Estimate</a>
                            <a title="Call <?php echo $phone_number; ?>" href="tel:<?php echo $phone_link; ?>" class="sec-btn outline-btn white-btn">Call <span class="for-des">&nbsp;<?php echo $phone_number; ?></span> <span class="for-mob"> &nbsp;Us Now</span> </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-img-wp">
                        <div class="banner-img-pattern pattern wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"></div>
                        <div class="banner-img wow left-animation" data-wow-duration="1s" data-wow-delay="0.2s" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/04/main-banner-img-1.jpg);"></div>
                        <div class="banner-img wow left-animation" data-wow-duration="1s" data-wow-delay="0.3s" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/04/main-banner-img-2.jpg);"></div>
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
                    <div class="about-text wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 class="h2-title">About Us</h2>
                        <p>With forty years of experience in the business, JM Custom Iron Work builds and installs quality spiral staircases, security doors, yard gates, fencing, and more. All the ironwork we produce across Arizona and beyond is custom-fabricated to your specification by our talented team of professional craftsmen. Each piece is unique, a work of art adding to the value of your property.</p>
                        <p>If you have a design in mind for your residence or place of business, you can reach us at <?php echo $phone_number; ?> for a free over-the-phone estimate. If still contemplating the kind of ironwork your property requires, feel free to consult our experts. Juan Morales and the JM Custom Iron Work team are dedicated to helping you find a product that fits your style and your budget.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img-wp wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="about-pattern pattern"></div>
                        <div class="about-slider">
                            <div class="about-slider-img" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/03/about-slider-img-1.jpg);"></div>
                            <div class="about-slider-img" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/03/about-slider-img-2.jpg);"></div>
                            <div class="about-slider-img" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/04/about-slider-img-new-3.jpg);"></div>
                            <div class="about-slider-img" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/03/about-slider-img-4.jpg);"></div>
                            <div class="about-slider-img" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/03/about-slider-img-5.jpg);"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-ser-row">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="about-ser-img-wp wow right-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="about-ser-pattern pattern"></div>
                            <div class="about-ser-img" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/03/our-promise-img-1.jpg);"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="about-ser-text wow left-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                            <h2 class="h2-title">Our Promise To You</h2>
                            <p>At JM Custom Iron Work, we strive to be flawless when it comes to custom iron fabrication. When we discuss your vision for a spiral staircase, or other ornamental iron piece, you can ensure it will be created with the highest quality and attention to detail.</p>
                            <div class="about-box-wp">
                                <div class="about-box">
                                    <img src="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/images/custom-project-icon.svg" data-no-lazy="1" alt="custom project icon">
                                    <h6>Fully Custom <span>Projects</span></h6>
                                </div>
                                <div class="about-box">
                                    <img src="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/images/experience-icom.svg" data-no-lazy="1" alt="experience icom">
                                    <h6>Over 40 Years <span>of Experience</span></h6>
                                </div>
                                <div class="about-box">
                                    <img src="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/images/phone-estimate-icon.svg" data-no-lazy="1" alt="phone estimate icon">
                                    <h6>Free Over the Phone <span> Estimates</span></h6>
                                </div>
                                <div class="about-box">
                                    <img src="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/images/family-owned-icon.svg" data-no-lazy="1" alt="family owned icon">
                                    <h6>Family Owned <span>& Operated</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of About Sec -->

<section class="home-featured-work" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/main-banner-bg.jpg')">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="home-featured-work-text wow right-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h6 class="sub-title">Featured Work</h6>
                        <h2 class="h2-title">Spiral Staircases</h2>
                        <p>JM Custom Iron Work, your go-to source for quality ironwork in the greater Phoenix metro area, specializes in spiral staircases. Whether you’re going for pure functionality or something more rustic and ornamental, we can make it work. Every piece is custom-fabricated, and uniquely beautiful designs are the standard we’ve set for ourselves. We also offer powder coating for that special finishing touch. Choose from hundreds of colors to make that staircase stand out or blend perfectly with the rest of the structure, according to style preference.</p>
                        <a title="Learn More" href="<?php echo get_permalink(36); ?>" class="sec-btn outline-btn">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="home-featured-work-img-wp wow left-animation" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="home-featured-work-pattern pattern"></div>
                        <div class="home-featured-work-img" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/03/featured-work-img.jpg)"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end of Home Featured Work -->

<section class="work-sec" >
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="work-title">
                        <h2 class="h2-title">Other Work</h2>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="work-tab white-text">
                        <button class="sec-btn tab-dropdown" type="button"> <span class="gallery-active-menu">Courtyard Gates</span><span class="caret"></span></button>
                    </div>
                </div>
            </div>
        </div>



        <div class="other-work-slider">
            <div class="work-main-wp">
                <div class="work-main-content" title="Courtyard Gates" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/04/JM_OtherWork_CourtyardGates_New.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="work-slider-box white-text">
                                <h2 class="h2-title">Courtyard Gates</h2>
                                <p>Ornamental iron gates for your courtyard – unparalleled structural solidity, innovative design, expertly installed to fit the surrounding property. All the gates are custom-designed and custom-fabricated according to client specification.</p>
                                <a title="Courtyard Gates, See More" href="<?php echo get_permalink(32); ?>#gallery" data-type="courtyard-gates" class="sec-btn white-btn outline-btn other-work-more">See More</a>
                                <div class="work-box-pattern pattern"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="work-main-wp">
                <div class="work-main-content" title="Yard Gates" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/04/JM_OtherWork_YardGates_New.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="work-slider-box white-text">
                                <h2 class="h2-title">Yard Gates</h2>
                                <p>Ornamental iron gates for your backyard or front yard – sturdy and secure, stylishly designed, expertly installed with full attention to detail. All the gates are custom-designed and custom-fabricated according to client specification.</p>
                                <a title="Yard Gates, See More" href="<?php echo get_permalink(32); ?>#gallery" data-type="yard-gates" class="sec-btn white-btn outline-btn other-work-more">See More</a>
                                <div class="work-box-pattern pattern"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="work-main-wp">
                <div class="work-main-content" title="Entry Doors" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/04/JM_OtherWork_EntryDoors_New.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="work-slider-box white-text">
                                <h2 class="h2-title">Entry Doors</h2>
                                <p>Have your home project sturdiness and style in equal measure. Choose an entry door that reflects who you are through ornamental iron design and detailed finishes.</p>
                                <a title="Entry Doors, See More" href="<?php echo get_permalink(34); ?>#gallery" data-type="entry-doors" class="sec-btn white-btn outline-btn other-work-more">See More</a>
                                <div class="work-box-pattern pattern"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="work-main-wp security-doors-wp">
                <div class="work-main-content" title="Security Doors" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/04/JM_OtherWor_SecurityDoors_Update.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="work-slider-box white-text">
                                <h2 class="h2-title">Security Doors</h2>
                                <p>Add an extra layer of protection to your home exterior, keeping out intruders as well as the elements. Accept no compromise when it comes to safety. </p>
                                <a title="Security Doors, See More" href="<?php echo get_permalink(34); ?>#gallery" data-type="security-doors" class="sec-btn white-btn outline-btn other-work-more">See More</a>
                                <div class="work-box-pattern pattern"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="work-main-wp">
                <div class="work-main-content" title="Exterior Railings" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/04/JM_OtherWork_ExteriorRailing_New.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="work-slider-box white-text">
                                <h2 class="h2-title">Exterior Railings</h2>
                                <p>Ornamental iron railings for your balconies and decks, patios and porches. High-quality materials, expert installation. All railing designs, details, and finishes are fully customizable.</p>
                                <a title="Exterior Railings, See More" href="<?php echo get_permalink(32); ?>#gallery" data-type="exterior-railings" class="sec-btn white-btn outline-btn other-work-more">See More</a>
                                <div class="work-box-pattern pattern"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="work-main-wp">
                <div class="work-main-content" title="Interior Railings" style="background-image: url(<?php echo home_url(); ?>/wp-content/uploads/2021/04/JM_OtherWork_InteriorRailing_New.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="work-slider-box white-text">
                                <h2 class="h2-title">Interior Railings</h2>
                                <p>Ornamental iron railings for your staircases and stairwells. Expertly fabricated from high-quality material, installed up to code. All railing designs, details, and finishes are fully customizable.</p>
                                <a title="Interior Railings, See More" href="<?php echo get_permalink(32); ?>#gallery" data-type="interior-railings" class="sec-btn white-btn outline-btn other-work-more">See More</a>
                                <div class="work-box-pattern pattern"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section><!-- end of Work Sec -->

<div class="order-sec" >
    <section class="cta-custom-work" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2021/03/JMIronWorks_Gallery_CustomFabrications_2.jpg');" id="custom-work">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="cta-custom-work-text text-center white-text">
                            <h2 class="h2-title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">Our Custom Iron Work</h2>
                            <div class="wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                                <p>We work iron in the traditional way: no prefabricated pieces, no computer-generated designs. Just tell us what you need and we'll build it! Any size and any style, each custom-made product blending beauty with function.</p>
                            </div>
                            <div class="wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.4s">
                                <a title="Get an Estimate" href="javascript:void(0);" class="sec-btn estimate-btn" >Get an Estimate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end of Cta Custom Work -->

    <?php
    get_template_part('template-parts/content', 'testimonial');
    ?>
</div>

<section id="gallery-sec" class="photo-gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-title wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.2s">Photo Gallery</h2>
                <div class="gallery-tab wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
                    <button class="sec-btn tab-dropdown" type="button"> <span class="gallery-active-menu">Courtyard Gates</span><span class="caret"></span></button>
                    <ul class="dropdown-tabbing">
                        <?php
                        $i = 1;
                        if (have_rows('service_gallery')) {
                            while (have_rows('service_gallery')) {
                                the_row();
                                $data_slug = strtolower(str_replace(" ", "-", get_sub_field('service_name')));
                                if ($i == 1) {
                                    $active_slug = $data_slug;
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
                        ?>
                    </ul>
                </div>

                <div class="gallery-masonry-box wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.4s">

                    <div class="gallery-masonry">
                        <?php
                        if (have_rows('service_gallery')) {
                            while (have_rows('service_gallery')) {
                                the_row();
                                $data_slug = strtolower(str_replace(" ", "-", get_sub_field('service_name')));
                                if ($data_slug == $active_slug) {
                                    $gallery_counter=1;
                                    $gallery = get_sub_field('gallery_images');
                                    foreach ($gallery as $key => $image) {
                        ?>
                                        <a title="<?php echo get_sub_field('service_name').' '.$gallery_counter; ?>" href="<?php echo $image['url']; ?>" data-fancybox="<?php echo $active_slug; ?>">
                                            <img src="<?php echo $image['url']; ?>" data-no-lazy="1" alt="<?php echo get_sub_field('service_name').' '.$gallery_counter; ?>">
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