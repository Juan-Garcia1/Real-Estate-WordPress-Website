<?php 
  $terms = get_the_terms( $post->ID , 'furnishing' );
?>


  <div class="<?php if(is_search() || is_archive()) { echo "col-md-4 "; } else { echo "col-sm-6 "; } ?> p-3">
    <article>
      <div>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("large"); ?></a>
        <?php if ( !is_archive() ) : ?>
          <span class="small">
            <?php foreach ( $terms as $term ) : ?>
              <?php echo $term->name; ?>
            <?php endforeach; ?>        
          </span>
        <?php endif; ?>
      </div>
      <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    </article>
  </div>
  <!-- col -->