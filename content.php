<?php if ( is_search() ) : ?>
  <div class="col-md-4 p-3">
    <article>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("large"); ?></a>
        <h5><?php the_title(); ?></h5>
        <span class="small">
          <?php
            $terms = get_the_terms( $post->ID , 'furnishing' );
            foreach ( $terms as $term ) {
              echo '<a href="' . get_term_link($term->slug, 'furnishing') . '">' . $term->name . '</a>';
            }
          ?>        
        </span>
      </article>
  </div>
  <!-- col-md-4 -->
<?php else : ?>
  <div class="col-sm-6 p-3">
    <article>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("large"); ?></a>
        <h5><?php the_title(); ?></h5>
        <?php if (!is_archive()) : ?>
          <span class="small">
          <?php
            $terms = get_the_terms( $post->ID , 'furnishing' );
            foreach ( $terms as $term ) {
              echo '<a href="' . get_term_link($term->slug, 'furnishing') . '">' . $term->name . '</a>';
            }
            ?>        
          </span>
        <?php endif; ?>
      </article>
  </div>
  <!-- col-sm-6 -->
<?php endif; ?>