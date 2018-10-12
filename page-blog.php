<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Spartan
 * @since Spartan 1.0
 */

get_header(); ?>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <!-- C.2. SITE MAST ------------------------------------------------------------------------------------------- -->

    <section class="page page__blog" id="mast">

        <!-- C.2.2. SLIDER AREA ----------------------------------------------------------------------------------- -->
        
        <div class="wrapper">
        
            <!-- C.2.2.1. ABOUT US -------------------------------------------------------------------------------- -->
            
            <section class="container">
                
                
                <div class="section__articles grid">
                    
                <?php

                    $args=array(
                      'post_status' => 'publish',
                      'meta_key' => 'featured',
                      'orderby' => 'meta_value date',
                      'order' => 'DESC'
                    );
                    $my_query = null;
                    $my_query = new WP_Query($args);

                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) : $my_query->the_post(); ?>

                        <aside class="col-md-6 <?php the_field('featured') ?>">
                            <article class="article">
                                <div class="article__body">
                                    <h3><?php the_title(); ?></h3>
                                </div>
                                <div class="article__figure">
                                    <a class="image-wrapper" href="<?php the_permalink() ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </div>
                                <div class="article__body">
                                    <p><?php the_excerpt(); ?></p>
                                    <a class="btn-default" href="<?php the_permalink() ?>">Continue reading</a>
                                </div>
                            </article>
                        </aside>

                        <?php

                        endwhile;
                    }
                    wp_reset_query();  // Restore global post data stomped by the_post().
                ?>
                
                </div>
            </section>
            
            <!-- C.2.2.1. END ------------------------------------------------------------------------------------- -->

        </div>
        
        <!-- C.2.2. End ------------------------------------------------------------------------------------------- -->

    </section>
    
    <!-- C.2. END ------------------------------------------------------------------------------------------------- -->
<?php get_footer(); ?>
<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part( 'inc/footer-scripts' ); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->