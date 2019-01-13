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

<?php if ( is_front_page() || is_search() ) : ?>
  <header class="jumbotron jumbotron-fluid" style="background: linear-gradient(0, rgba(0,0,0,.7), rgba(0,0,0,.6)), url('<?php echo content_url() . '/uploads/2019/01/main-header-img.jpeg' ?>') no-repeat center center / cover; padding: 15% 0;">
    <div class="container">
      <?php get_search_form(); ?>
    </div>
  </header>
<?php endif; ?>