<?php if ( is_front_page() && is_home() ){
echo get_template_part( 'header', 'custom' );}
else {
echo get_header(); } ?>

  <div id="accordion">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?> 

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
  </div>
<?php get_template_part('content', 'cta'); ?>
<?php get_footer(); ?>