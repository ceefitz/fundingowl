<?php 

  $num_posts = ( is_front_page() ) ? 4 : -1;

  $args = array(
  'post_type' => 'programs',
  'post_parent' => $post->ID,
  'numberposts' => -1,
  'post_status' => 'any', 
); 
  $query = new WP_Query( $args );

?>

<section class="programs">
	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
    <div class="box">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?>
        <h4><?php the_title(); ?></h4>
      </a>      
    </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
</section>