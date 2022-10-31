<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package JM_Custom
 */

get_header();
?>
<section class="main-banner inner-banner rest-banner" style=" background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/10/footer-bg.jpg');">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-text white-text">
                        <h1 class="h1-title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- emd of main-banner -->

<div class="inner-page-text">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="content-area">
					<main id="primary" class="site-main">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'jm-custom' ) . '</span> <span class="nav-title">%title</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'jm-custom' ) . '</span> <span class="nav-title">%title</span>',
								)
							);

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
				</div>
			</div>
			<div class="col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php
// $n=10;
// for ($i=1; $i <=$n ; $i++) { 
//     for ($k=1; $k <=$n/2 ; $k++) { 
//     	echo $k;
//     }
//     echo '<br>';
// }
// get_sidebar();
get_footer();
