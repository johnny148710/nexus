<?php
/**
 * Template name: Main Stage page
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' ); ?>
    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(41), 'full' );?>
    
<div class="banner-container padding-full" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><?php the_title(); ?></h1>
            <?php the_field('intro_text'); ?>
        </div>
    </div>
</div>  
<div class="wrapper" id="page-wrapper">
	<div class="container padding-full" id="content" tabindex="-1">
            <?php if (is_user_logged_in()): ?>
                <div class="row">
                    <div class="<?php if( get_field('main_stage_link') ): ?>col-6<?php else: ?> col-12 <?php endif; ?>">
                        <main class="site-main" id="main">
                            <?php /*while ( have_posts() ) { ?>
                                <?php the_post(); ?>
                            
                                <?php the_content(); ?>
                                <?php // get_template_part( 'loop-templates/content', 'single' );
                                // understrap_post_nav(); ?>
                            <?php } */ ?>

                            <?php 
                                $seatingLink = get_field('seating_link');
                                if( $seatingLink ): 
                                    $link_url = $seatingLink['url'];
                                    $link_title = $seatingLink['title'];
                                    $link_target = $seatingLink['target'] ? $seatingLink['target'] : '_self';
                                    ?>
                                    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </main><!-- #main -->
                    </div>
                    <?php if( get_field('main_stage_link') ): ?>
                        <div class="col-6">
                            <?php 
                                $link = get_field('main_stage_link');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php else: ?>
                <div class="login-wrapper text-center">
                    <!-- <h3>You must be logged in to view this page!</h3> -->
                    <br>
                    <?php wp_login_form(); ?>
                </div>
            <?php endif; ?>
	</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer();
