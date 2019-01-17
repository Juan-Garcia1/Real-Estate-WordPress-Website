<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title(""); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php wp_nav_menu(array(
  "container" => "nav",
  "container_class" => "container"
)); ?>

<?php if ( is_front_page() || is_search() || is_archive() ) : ?>
  <header class="jumbotron jumbotron-fluid main-header" style="background: linear-gradient(0, rgba(0,0,0,.7), rgba(0,0,0,.6)), url('<?php echo content_url() . '/uploads/2019/01/main-header-img.jpeg' ?>') no-repeat center center / cover; padding: 15% 0;">
    <div class="container text-center">
      <h2>Find the property of your dreams</h2>
      <p>Search below for the place you've always dream of having, and let use take care of the rest.</p>
      <?php get_search_form(); ?>
    </div>
  </header>
<?php endif; ?>