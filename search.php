<?php get_header(); ?>
  
<main>
  <div class="container">
    <?php if ( have_posts() ) : ?>
      <p><strong>Search results for: <?php the_search_query(); ?></strong></p>
      <div class="row">
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="col-md-4 p-3">
            <a href="<?php the_permalink(); ?>">
              <article>
                <?php the_post_thumbnail("large"); ?>
                <h5><?php the_title(); ?></h5>
              </article>
            </a>
          </div>
          <!-- col -->
          <?php endwhile; ?>
        </div>
        <!-- row -->
        <?php else : ?>
          <p><strong>Sorry no search results for "<?php the_search_query(); ?>"</strong></p>
      <?php endif; ?>
  </div>
  <!-- container -->
</main>

<?php get_footer(); ?>