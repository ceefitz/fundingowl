<?php 
  $num_posts = ( is_front_page() ) ? 4 : -1;
  $args = array(
    'post_type' => 'testimonials',
    'post_parent' => 0,
    'posts_per_page' => 1,
  );
  $query = new WP_Query( $args );
?>
      <div class="flexitem" id="testimonial">
      <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
        <figure class="testimonial_bubble">
                <h2><?php the_field('quote'); ?></h2>
          </figure>
          <img src="http://fundingowl.ca/wp-content/uploads/2016/03/fred.jpg">
          <h5><?php the_field('name'); ?></h5>

      <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>