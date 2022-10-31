<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                        <h1 class="h1-title"><?php the_archive_title(); ?></h1>
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
				<div id="primary" class="content-area">
					<main id="primary" class="site-main">

						<?php if ( have_posts() ) : ?>

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', get_post_type() );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<div class="col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
