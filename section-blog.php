<!-- C.2.6. ARTISTS -->

<section class="section section-blog" id="section-blog">

    <div class="container">

        <!-- C.2.6.2. Case Study List -->
        
        <section class="section__articles">
            <section class="row">

                <?php

                    $args=array(
                      'post_type' => 'post',
                      'post_status' => 'publish',
                      'meta_key' => 'featured',
                      'orderby' => 'meta_value date',
                      'order' => 'DESC',
                      'posts_per_page' => 10
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

            </section>
            
            <a class="btn-default button" href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=24">VIEW MORE ARTICLES</a>
            
        </section>

    </div>                 

</section>

<!-- C.2.6. END -->