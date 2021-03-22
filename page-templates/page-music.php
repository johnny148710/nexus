<?php
/**
 * Template name: Music page
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' ); ?>
 
<div class="wrapper" id="page-wrapper">
	<div class="container padding-full" id="content" tabindex="-1">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="container music">
            <?php
                if( have_rows('music') ): ?>
                <div class="row">
                    <?php while( have_rows('music') ) : the_row(); ?>
                        <?php $music_videos = get_sub_field('music_videos'); ?>
                        
                        <?php $music_title = get_sub_field('music_title'); ?>

                        <div class="col-md-3 music-container">
                            <div class="music-text" data-mh="mh-title">
                                <?php echo $music_title; ?>
                            </div>    
                            <div loading="lazy">
                                <?php echo $music_videos; ?>                                
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
	</div><!-- #content -->
</div><!-- #page-wrapper -->

<?php get_footer();
