<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <?php wp_head(); ?>
</head>
<body>
  <nav id="navwrapper">
        <div class="home">
          <a href="http://fundingowl.ca"><img class="first" src="http://fundingowl.ca/wp-content/uploads/2016/06/fulllogo.png"></a>
        </div>
        <div class="navbar" id="navbar">
    <?php 

      $defaults = array(
        'container' => false,
        'theme_location'  => 'primary-menu',
        'menu_class'  => 'topnav'
      );

      wp_nav_menu( $defaults );

    ?>
        </div>
    <?php get_sidebar('two'); ?>
    </nav>
  <header class="other">
      <h1><?php the_field('header_text'); ?></h1>
  </header>
