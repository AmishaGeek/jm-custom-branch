<section class="main-banner inner-banner" style="background-image: url('<?php the_field('banner_image'); ?>');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-text white-text wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h1 class="h1-title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of Main Banner -->

<section class="about-sec service-detail">
    <div class="sec-wp">
        <div class="container">
            <?php
                if (have_rows('sub_service_list')) :
                    $service_counter=1;
                    while (have_rows('sub_service_list')) : the_row();
                        $content = get_sub_field('sub_service_list_content');
                        if ($service_counter % 2 == 0) : ?>
                            <div class="about-ser-row">
                                <div class="row align-items-center">
                                    <div class="col-lg-5">
                                        <div class="about-img-wp wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                            <div class="about-pattern pattern"></div>
                                            <div class="back-img" style="background-image: url('<?php the_sub_field('sub_service_list_image');  ?>');"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="about-text wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                            <h4 class="h4-title"><?php the_sub_field('sub_service_list_title'); ?></h4>
                                            <?php echo (isset($content) && !empty($content)) ? $content : '' ; ?>
                                            <?php
                                                if (have_rows('sub_service_list_points')) { ?>
                                                    <div class="sec-points">
                                                        <ul>
                                                            <?php
                                                                while (have_rows('sub_service_list_points')) { 
                                                                    the_row();?>
                                                                        <li><?php the_sub_field('sub_service_list_point_title'); ?></li>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                <?php    
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php  else: ?>
                            <div class="about-ser-row">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 order-lg-1 order-2">
                                        <div class="about-text wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                            <h4 class="h4-title"><?php the_sub_field('sub_service_list_title'); ?></h4>
                                            <?php echo (isset($content) && !empty($content)) ? $content : '' ; ?>
                                            <?php
                                                if (have_rows('sub_service_list_points')) { ?>
                                                    <div class="sec-points">
                                                        <ul>
                                                            <?php
                                                                while (have_rows('sub_service_list_points')) { 
                                                                    the_row();?>
                                                                <li><?php the_sub_field('sub_service_list_point_title'); ?></li>
                                                                    <?php
                                                                }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                <?php    
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 order-lg-2 order-1">
                                        <div class="about-img-wp wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                            <div class="about-pattern pattern"></div>
                                            <div class="back-img" style="background-image: url('<?php the_sub_field('sub_service_list_image');  ?>');"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endif;
                        $service_counter++;
                    endwhile;
                endif; 
            ?>
        </div>
    </div>
</section>
<!-- end of About Sec -->

<?php
if (have_rows('our_fence_list')) { ?>
    <section class="work-sec">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="work-title">
                            <h3 class="h3-title"><?php the_field('our_fence_title'); ?></h3>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="work-tab white-text"><button class="sec-btn tab-dropdown" type="button"> <span class="gallery-active-menu"></span><span class="caret"></span></button></div>
                    </div>
                </div>
            </div>
            <div class="other-work-slider">
                <?php
                    if (have_rows('our_fence_list')) {
                        while (have_rows('our_fence_list')) {
                            the_row(); ?>
                                <div class="work-main-wp">
                                    <div class="work-main-content" title="<?php the_sub_field('our_fence_list_title'); ?>" style="background-image: url(<?php the_sub_field('our_fence_list_image'); ?>);"></div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="work-slider-box white-text">
                                                    <h4 class="h4-title"><?php the_sub_field('our_fence_list_title'); ?></h4>
                                                    <div class="work-slider-data overflow-text" data-simplebar="">
                                                        <?php the_sub_field('our_fence_list_content'); ?>
                                                    </div>
                                                    <a title="<?php the_sub_field('our_fence_list_title'); ?> See More" href="<?php the_sub_field('our_fence_list_see_more_link'); ?>" data-type="courtyard-gates" class="learn-more" >See More <span><img src="<?php echo home_url(); ?>/wp-content/themes/jm-custom/assets/images/right-arrow-2.svg" width="19" height="19" alt="<?php echo strip_tags(get_sub_field('our_fence_list_title')); ?> Right Arrow"></span></a>
                                                    <div class="work-box-pattern pattern"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- end of Work Sec -->
    <?php
}
?>

<?php get_template_part('template-parts/content', 'deals'); ?>