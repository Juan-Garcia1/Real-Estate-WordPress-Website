<?php get_header(); ?>
  <main>
    <div class="container">
      <div class="row">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part("content"); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </main>
<?php get_footer(); ?>