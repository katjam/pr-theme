<header id="header" class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="logo">
          <a class="brand" href="<?= esc_url(home_url('/')); ?>">
            <span class="screen-reader-text"><?php bloginfo('name'); ?></span>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.jpg" />
          </a>
        </div>
        <h2><?php echo get_bloginfo('description', 'display'); ?></h2>
      </div>
      <div class="col-md-4 align-right">
        <?php dynamic_sidebar('sidebar-header'); ?>
      </div>
    </div>
  </div>
</header>
<nav class="nav-primary">
  <div class="container">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif;
    ?>
</div>
</nav>
