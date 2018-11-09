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

<!-- C.1. PAGE HEADER ------------------------------- -->

<?php get_template_part( 'inc/navigation-home' ); ?>

<!-- C.1. END --------------------------------------- -->

<main class="p-main">

  <!-- C.1. PAGE HEADER ----------------------------- -->

  <?php get_template_part( 'inc/page-header' ); ?>

  <!-- C.1. END ------------------------------------- -->

  <!-- C.2. SECTIONS -------------------------------- -->

  <section class="container">

    <!-- C.2.2.1. ABOUT US ---------------------------------------------------------------------------- -->

    <!-- C.2.4.1.1. Dynanic Content area -->

    <?php while ( have_posts() ) : the_post(); ?>

      <h3><?php the_title(); ?></h3>

      <!-- .nav-single -->

    <?php endwhile; // end of the loop. ?>

    <!-- C.1.1 End -->

    <figure class="article__figure">
      <span class="image-wrapper">
          <?php the_post_thumbnail(); ?>
      </span>
    </figure>

    <?php while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

      <!-- .nav-single -->

    <?php endwhile; // end of the loop. ?>

    <!-- C.1.1 End -->

    <!-- C.2.2.1. END --------------------------------------------------------------------------------- -->

    <!-- C.2.2.2. COMMENTS SECTION -------------------------------------------------------------------- -->

    <section class="block__comments">
      <?php comments_template(); ?>
    </section>

    <!-- C.2.2.2. END --------------------------------------------------------------------------------- -->

  </section>


  <!-- C.2. END ------------------------------------- -->

  <!-- C.3. FOOTER  --------------------------------- -->

  <?php get_footer(); ?>

  <!-- C.3. END ------------------------------------- -->

</main>

<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part( 'inc/footer-scripts' ); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->