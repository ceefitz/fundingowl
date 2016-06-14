<?php
/*
	Template Name: Left Sidebar
*/
?>

<?php if ( is_front_page() && is_home() ){
echo get_template_part( 'header', 'custom' );}
else {
echo get_header(); } ?>
	
	 <section class="programs-single">
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <div class="primary">

		      <?php the_field('images'); ?> 
       	</div>

   		<div class="secondary">
			<h2><?php the_title(); ?></h2>
			<p><?php the_field('description'); ?></p>

			<p>
				<?php previous_post_link(); ?> -
				<a href="<?php bloginfo('url'); ?>/funding-programs">Back to Programs</a> - 
				<?php next_post_link(); ?>
			</p>
		</div>
		<h2>Grant programs in this category</h2>
		<?php get_template_part('content', 'child'); ?>
		
   		<?php endwhile; endif; ?>
    </section>

<?php get_template_part('content', 'cta'); ?>
<?php get_footer(); ?>