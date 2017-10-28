<header class="banner">
  <div class="container">
    <div class="logo">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>">
        <?php bloginfo('name'); ?>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.jpg" />
      </a>
    </div>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
