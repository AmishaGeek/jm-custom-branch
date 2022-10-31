<?php $frontpage_id = get_option( 'page_on_front' ); ?>
<section class="deals" style="background-image: url('<?php the_field('deals_background_image',$frontpage_id); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="deals-content">
                    <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('deals_title',$frontpage_id); ?></h2>
                    <p class="wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php the_field('deals_sub_title',$frontpage_id); ?></p>
                    <a class="sec-btn btn-black wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s" href="<?php echo get_permalink(273); ?>" title="Contact Us">contact us</a>
                </div>
            </div>
        </div>
    </div>
</section>