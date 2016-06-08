<?php
/*
	Template Name: Left Sidebar
*/
?>

<?php if ( is_front_page() && is_home() ){
echo get_template_part( 'header' );}
else {
echo get_header(); } ?>

	 <section class="mainBlog">
        <div class="primary">

             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		    
		      <h1><?php the_title(); ?></h1>      
		      <p><?php the_content(); ?></p>        
			
			<?php endwhile; else : ?>
			
			  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
			
			<?php endif; ?>

       	</div>

   		<?php get_sidebar( 'page' ); ?>

    </section>



<?php get_footer(); ?>