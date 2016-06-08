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
  <header class="blog">
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <Div class="meta-wrapper">
                    <a href="author.html">
                      <div class="avatar_small">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
                      </div>
                      <div class="author">
                        <p>by <?php the_author_posts_link(); ?></p><p><?php the_category( ', ' ); ?></p> <p><?php the_time('F j, Y'); ?></p>
                    </div>
                    </a>
                  </Div>
    <?php endwhile; else : ?>
      
        <p><?php _e( 'Sorry, no pages found.' ); ?></p>
      
      <?php endif; ?>
  </header>

