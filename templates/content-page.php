<div class="page-content">
  <div class="row">
    <div class="col-md-8">
      <div class="row"><?php the_content(); ?></div>
      <?php $pr_img_text_sets = get_post_meta($post->ID, 'pr_img_text_sets', true);
        if ( $pr_img_text_sets ) : ?>
          <?php foreach ( $pr_img_text_sets as $field ) { ?>
            <div class="row">
              <div class="col-md-4">
                <?php if($field['image'] != '') echo '<img src="'. esc_attr( $field['image'] ) . '" style="width:220px" />'; ?>
              </div>
              <div class="col-md-8">
                <?php if($field['heading'] != '') echo '<h3>'. esc_attr( $field['heading'] ) . '</h3>'; ?>
                <?php if($field['text'] != '') echo '<p>'. esc_attr( $field['text'] ) . '</p>'; ?>
              </div>
            </div>
          <?php } ?>
        <?php endif; ?>
      </div>
      <div class="col-md-4">
        <?php the_post_thumbnail( 'main-page' ); ?>
      </div>
    </div>
</div>
