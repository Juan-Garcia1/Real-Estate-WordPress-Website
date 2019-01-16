<?php get_header(); ?>

<main>
  <div class="container">
    <h3 class="text-center">Latest Listings</h3>
  
    <?php 
      $args = array(
        "post_type" => "listing",
        "post_per_page" => 2
      );
      $query = new WP_Query($args);
    ?>
    <div class="row">
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <?php get_template_part("content"); ?>
      <?php endwhile; ?>

    </div>
    <!-- row -->

  </div>
  <!-- container -->
</main>

<?php get_footer(); ?>