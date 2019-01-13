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
        <div class="col-sm-6 p-3">
          <a href="<?php the_permalink(); ?>">
            <article>
                <?php the_post_thumbnail("large"); ?>
                <h5><?php the_title(); ?></h5>
              </article>
          </a>  
        </div>
        <!-- col-sm-6 -->
      <?php endwhile; ?>

    </div>
    <!-- row -->

  </div>
  <!-- container -->
</main>

<?php get_footer(); ?>