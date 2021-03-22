<?php
/**
 * Template Name: Showcase page
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>
<?php get_template_part('partials/banner'); ?>
<div class="container site-main showcases padding-bottom">
    <h2><?php the_title(); ?></h2>

    <div class="row">
        <div class="col-md-9">
            <div class="row">
                <?php if( have_rows('showcases') ):
                    while( have_rows('showcases') ) : the_row();
                        
                        $showcase_image = get_sub_field('showcase_image');
                        $showcase_text = get_sub_field('showcase_text');
                        $showcase_link = get_sub_field('showcase_link');
                        ?>

                        <div class="col-md-3">
                            <?php if( !empty( $showcase_image ) ): ?>
                                <img src="<?php echo esc_url($showcase_image['url']); ?>" alt="<?php echo esc_attr($showcase_image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-md-9">
                            <?php echo $showcase_text; ?>

                            <?php if( $showcase_link ): ?>
                                <a class="button" href="<?php echo esc_url( $showcase_link ); ?>">View</a>
                            <?php endif; ?>
                        </div>
                        
                    <?php endwhile;
                endif; ?>
            </div>
        </div>
        <div class="col-md-3 showcase-image-container">
            <?php if( have_rows('showcase_images') ):
                while( have_rows('showcase_images') ) : the_row(); ?>
                    <?php $showcase_image = get_sub_field('showcase_images'); ?>
                    <?php if( !empty( $showcase_image ) ): ?>
                        <img src="<?php echo esc_url($showcase_image['url']); ?>" alt="<?php echo esc_attr($showcase_image['alt']); ?>" />
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();