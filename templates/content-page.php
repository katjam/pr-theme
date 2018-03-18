<div class="page-content">
  <div class="d-md-flex">
      <div><?php the_content(); ?></div>
      <div class="pl-md-2 pb-2">
        <?php the_post_thumbnail( 'main-page' ); ?>
      </div>
  </div>
  <?php $pr_img_text_sets = get_post_meta($post->ID, 'pr_img_text_sets', true);
        if ( $pr_img_text_sets ) : ?>
          <?php foreach ( $pr_img_text_sets as $field ) { ?>
            <div class="d-md-flex pb-md-2">
              <div class="pr-md-2">
                <?php if($field['image'] != '') echo '<img src="'. esc_attr( $field['image'] ) . '" style="max-width: 350px;" />'; ?>
              </div>
              <div>
                <?php if($field['heading'] != '') echo '<h3>'. esc_attr( $field['heading'] ) . '</h3>'; ?>
                <?php if($field['text'] != '') echo '<p>'. esc_attr( $field['text'] ) . '</p>'; ?>
              </div>
              <div>
                <?php if($field['pdf_src'] && $field['pdf_src']['url'] != '') echo '<a href="'.$field['pdf_src']['url'].'" role="button" class="button">Download Pdf</a>'; ?>
              </div>
            </div>
          <?php } ?>
        <?php endif; ?>
      </div>
    </div>
</div>
