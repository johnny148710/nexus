
<?php
/**
 * Template Name: Welcome page
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">
    <div class="container" id="content" tabindex="-1">
        <main class="site-main" id="main">
            <div class="intro padding-full">
                <?php the_field('intro_text'); ?>    
            </div>

            <?php while ( have_posts() ) {
                the_post();
                // the_title();
                the_content();
            } ?>

            <div class="row two-column">
            <?php if( have_rows('2_column_text') ): ?>
                <?php while( have_rows('2_column_text') ) : the_row(); ?>
                    <div class="col-md-6 two-column__text-container">
                        <?php echo the_sub_field('left_text'); ?>
                    </div>
                    <div class="col-md-6 two-column__text-container">
                        <?php echo the_sub_field('right_text'); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>

            <div class="col-md-12 padding-full awards">
                <h3><?php the_field('category_title'); ?></h3>
                <div class="row">
                    <?php if( have_rows('awards') ): ?>
                        <?php while( have_rows('awards') ) : the_row(); ?>
                            <div class="col text-center">
                                <?php $awardImage = get_sub_field('award_image');
                                if( !empty( $awardImage ) ): ?>
                                    <img src="<?php echo esc_url($awardImage['url']); ?>" alt="<?php echo esc_attr($awardImage['alt']); ?>" />
                                <?php endif; ?>
                                <h4><?php the_sub_field('award_title'); ?></h4>
                                <p><?php the_sub_field('award_copy'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                
            </div>
        </main><!-- #main -->
	</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php
get_footer();
