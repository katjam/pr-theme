<?php $id = get_the_ID(); ?>
<?php $field = get_post_meta( $id, 'pr_property_listing_pdf', true); ?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="page-header">
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </div>
    <div class="page-content">
      <div class="d-md-flex">
      <div><?php the_content(); ?></div>
      <div class="pl-md-2 pb-2" style="text-align: right;">
        <?php the_post_thumbnail( 'main-page' ); ?>
      </div>
      </div>
    </div>
  </article>
<?php endwhile; ?>
