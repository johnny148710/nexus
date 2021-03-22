<?php 
/**
 * Template name: Heath & Wellbeing page
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' ); ?>
    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(41), 'full' );?>
    
<div class="banner-container padding-full" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
        <!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
        <?php the_field('banner_information'); ?>
</div>  
<div class="wrapper" id="page-wrapper">
	<div class="container padding-full" id="content" tabindex="-1">
        <div class="row">
            <div class="col-md-12">
                <h1 class="title"><?php the_title(); ?></h1>
                <main class="site-main" id="main">
                <?php while ( have_posts() ) { ?>
                    <?php the_post(); ?>
                   
                    <?php the_content(); ?>
                    <?php // get_template_part( 'loop-templates/content', 'single' );
                    // understrap_post_nav(); ?>
                <?php } ?>
            </main><!-- #main -->
            </div>
                <div class="col-md-12">
                    <?php the_field('meditation_description'); ?>
                </div>
                <?php if( have_rows('meditation') ): ?>
                    <?php while( have_rows('meditation') ) : the_row(); ?>
                    <?php $meditation_videos = get_sub_field('meditation_videos'); ?>
                        <div class="col-md-6">
                            <?php echo $meditation_videos; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            <div class="col-md-12">
                <?php the_field('health_and_wellbeing_description'); ?>
            </div>
            <?php if( have_rows('health_and_wellbeing') ): ?>
                <?php while( have_rows('health_and_wellbeing') ) : the_row(); ?>
                <?php $health_and_wellbeing_videos = get_sub_field('health_and_wellbeing_videos'); ?>
                    <div class="col-md-6">
                        <?php echo $health_and_wellbeing_videos; ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                
            </div>
        </div>
	</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer();
