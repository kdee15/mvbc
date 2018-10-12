<?php if ( has_nav_menu( 'primary' ) ) : ?>
  <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'iamnotthai' ); ?>">
    <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'primary-menu',
       ) );
    ?>
  </nav><!-- .main-navigation -->
<?php endif; ?>