<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Spartan
 * @since Spartan 1.0
 */

get_header();

?>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- C.1. PAGE HEADER --------------------------------- -->

<?php get_template_part( 'inc/page-header' ); ?>

<?php get_template_part( 'inc/navigation-page' ); ?>

<!-- C.1. END ----------------------------------------- -->

<main class="p-main page__blog">

  <!-- C.2. SECTIONS ---------------------------------- -->

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

  <!-- C.2. END --------------------------------------- -->

  <!-- C.3. FOOTER  ----------------------------------- -->

  <?php get_footer(); ?>

  <!-- C.3. END --------------------------------------- -->

</main>

<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part( 'inc/footer-scripts' ); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->