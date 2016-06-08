<?php if ( is_front_page() && is_home() ){
echo get_template_part( 'header', 'custom' );}
else {
echo get_header("single"); } ?>

	<section class="topBlurb">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<p><?php the_content(); ?></p>  

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

	</section>

<?php get_footer(); ?>