<?php  get_header(); ?>

<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>


<header class="listing-header" 
style="background: linear-gradient(0, rgba(0,0,0,0.7), rgba(0,0,0,.5)), url('<?php echo $thumb['0']; ?>') no-repeat center center / cover;">
  <div class="container">
    <div class="d-flex flex-column justify-content-center" style="height: 100vh;">
      <p class="listing-header__sub-title">premium listings</p>
      <h1 class="listing-header__title"><?php the_title(); ?></h1>
      <p class="listing-header__price">$<?php the_field("price"); ?> USD</p>
    </div>
  </div>
</header>

<section class="surface-section">
  <div class="container">
    <h3 class="text-center">Surface Information</h3>
    <div class="row">
      <?php if( have_rows('surface') ): while( have_rows('surface') ): the_row();       
        // vars
        $icon = get_sub_field('icon');
        $area = get_sub_field('area');
        ?>
  
        <div class="col-sm-6 col-md-3 surface-info">
          <img class="mx-auto d-block surface-info__icon" src="<?php echo $icon['url']; ?>"  />
          <p class="text-center surface-info__detail" ><?php echo $area; ?> sqm</p>  
        </div>
        <?php endwhile; ?>
      <?php endif; ?>

      
      <?php if( have_rows('floors') ): while( have_rows('floors') ): the_row();       
        // vars
        $icon = get_sub_field('icon');
        $number = get_sub_field('number');
        ?>
  
        <div class="col-sm-6 col-md-3 surface-info">
          <img class="mx-auto d-block surface-info__icon" src="<?php echo $icon['url']; ?>"  />
          <p class="text-center surface-info__detail"><?php echo $number; ?> floor(s)</p>  
        </div>
        <?php endwhile; ?>
      <?php endif; ?>


      <?php if( have_rows('bedrooms') ): while( have_rows('bedrooms') ): the_row();       
        // vars
        $icon = get_sub_field('icon');
        $number = get_sub_field('number');
        ?>
  
        <div class="col-sm-6 col-md-3 surface-info">
          <img class="mx-auto d-block surface-info__icon" src="<?php echo $icon['url']; ?>"  />
          <p class="text-center surface-info__detail"><?php echo $number; ?> bedroom(s)</p>  
        </div>
        <?php endwhile; ?>
      <?php endif; ?>


      <?php if( have_rows('bathrooms') ): while( have_rows('bathrooms') ): the_row();       
        // vars
        $icon = get_sub_field('icon');
        $number = get_sub_field('number');
        ?>
  
        <div class="col-sm-6 col-md-3 surface-info">
          <img class="mx-auto d-block surface-info__icon" src="<?php echo $icon['url']; ?>"  />
          <p class="text-center surface-info__detail"><?php echo $number; ?> bathrooms(s)</p>  
        </div>
        <?php endwhile; ?>
      <?php endif; ?>

  </div>
  <!-- row -->
  <!-- container -->
</section>

<section class="furnishing-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <img class="furnished-img mx-auto d-block" src="<?php echo content_url() . "/uploads/2019/01/furnishing.png?>" ?>"/>
      </div>
      <div class="col-sm-6 text-center text-md-left">
        <h4>Type of Furnishing</h4>
        <p class="furnishing-type"><?php the_field("type_of_furnishing"); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="price-score-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 text-center text-md-right">
        <h4>Price score for the area</h4>
        <p class="price-score"><?php the_field("price_score"); ?>%</p>
      </div>
      <div class="col-sm-6 text-center">
        <img class="price-score-img mx-auto d-block" src="<?php echo content_url() . "/uploads/2019/01/price-score.png" ?>" >
      </div>
    </div>
  </div>
</section>

<?php if (get_field("additional_information")) : ?>
  <section class="additional-info-section">
    <div class="container">
      <h4 class="text-center">Additional Information</h4>
      <p><?php echo get_field("additional_information"); ?></p>
    </div>
  </section>
<?php else: ?>
<p>Additional Inforamtion not available at the moment.</p>
<?php endif; ?>

<section class="location-and-availability-section">
  <div class="container">
  <h4 class="text-center">Location and availability information</h4>
  <div class="row">
    <div class="col text-center">
      <h5>Location</h5>
      <p class="location"><small><?php the_field("location"); ?></small></p>
    </div>
    <div class="col text-center">
      <h5>Available From</h5>
      <p class="availability"><small><?php the_field("available_from"); ?></small></p>
    </div>
  </div>
  <!-- row -->
  </div>
  <!-- container -->
</section>

<?php get_footer(); ?>
