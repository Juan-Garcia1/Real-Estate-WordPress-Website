<?php get_header(); ?>
  
<main>
  <div class="container">
    <?php if ( have_posts() ) : ?>
      <p><strong>Search results for: <?php the_search_query(); ?></strong></p>
      <div class="row">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part("content"); ?>
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