<header class="banner">
  <div class="container">
    <div class="alignleft">
      <div class="logo">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>">
          <span class="screen-reader-text"><?php bloginfo('name'); ?></span>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.jpg" />
        </a>
      </div>
      <p><?php echo get_bloginfo ( 'description', 'display' ); ?></p>
    </div>

    <div class='alignright'>
      <?php dynamic_sidebar('sidebar-header'); ?>
    </div>
    <div style="clear:both">
      <nav class="nav-primary">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
        ?>
      </nav>
    </div>
  </div>
</header>
