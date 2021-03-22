<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="archive-wrapper">
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(41), 'full' );?>
          
          <div class="banner-container padding-full" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
                  <!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
                  <?php the_field('banner_information'); ?>
          
          </div>  
	<div class="container" id="content" tabindex="-1">
        <main class="site-main" id="main">
            <div class="row team">
                <div class="col-md-12">
                    <h2>Bios</h2>
                </div>
            <?php $args = array(
                'post_type' => 'team',
                'order' => 'ASC'
                ); ?>
            <?php $team = new WP_Query( $args ); ?>
                <?php while ( $team->have_posts() ) : $team->the_post(); ?>
                    <div class="col-md-12 padding-full">
                        <div class="row">
                            <div class="col-md-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="col-md-9 team__title">
                                <h3><?php the_title(); ?></h3>
                                
                                <div class="team__text">
                                    <?php the_field('team_intro'); ?>
                                    <button class="button team__button">Read More <i class="fa fa-plus"></i></button>
                                    <div class="team__description padding-top">
                                        <?php the_field('team_full_description'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </main>
	</div><!-- #content -->
</div><!-- #archive-wrapper -->

<?php
get_footer();
