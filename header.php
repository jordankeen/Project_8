<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jordan Keen | Front-End Web Developer</title>
  <link type="image/png" href="<?php $image = get_field('favicon_image'); ?>
        <?php echo $image['url']?>
        " rel="icon">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>">

  <header id="home"></header>

  <nav>

      <a class="logo" href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>

    <div class="nav">
      <button class="btn-nav">
          <span class="icon-bar top"></span>
          <span class="icon-bar middle"></span>
          <span class="icon-bar bottom"></span>
      </button>
    </div>


  </nav> 


