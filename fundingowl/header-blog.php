<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">  
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
  <header class="blog">
   <?php query_posts($query_string."&featured=yes"); ?>
  <?php $my_query = new WP_Query( 'category_name=featured&posts_per_page=1' );
    while ( $my_query->have_posts() ) : $my_query->the_post();?>
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <h2><?php the_time(get_option('date_format')) ?></h2>
      <div class="button">
          <a href="<?php the_permalink(); ?>">Read More</a> 
      </div>
  <?php endwhile; ?>
  </header>

