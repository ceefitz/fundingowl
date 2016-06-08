<?php if ( is_front_page() && is_home() ){
echo get_template_part( 'header', 'custom' );}
else {
echo get_header("home"); } ?>

	<section class="topBlurb">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<p><?php the_content(); ?></p>  

		<section class="threeColumn">
		<div class="home-flex-wrapper" id="content">
		        <div class="flexitem" ID="blogPreview">
		        <h3>Recent Posts</h3>
			        
					<?php
						 $postslist = get_posts('numberposts=1&order=DESC&orderby=date');
						 foreach ($postslist as $post) :
						    setup_postdata($post);
						 ?>
						 	<?php the_post_thumbnail('small'); ?>
						 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						 <?php the_time(get_option('date_format')) ?>
						 
					<?php endforeach; ?>
				</div>
			<hr class="home">
			<?php get_template_part('content', 'testimonial'); ?>
			<hr class="home">
			<div class="flexitem" id="statSection">
	        	<img src="http://fundingowl.ca/wp-content/uploads/2016/06/farming_thumb.jpg">
	        	<h2><?php the_field('stats'); ?></h2>
	        </div>
    	</div>
	</section>
	
		<section class="industry">
	<h1>There are grants available for virtually every industry. Learn more about some of the programs that you may be eligible for.</h1>
	<div class="flex-wrapper">
		<div class="homebox one">
			<a href="http://fundingowl.ca/programs/hiring/">
				<h4>Hiring and Training</h4>
			</a>			
		</div>
		<div class="homebox two">
			<a href="http://fundingowl.ca/programs/business-expansion/">
				<h4>Business Expansion</h4>
			</a>
		</div>
		<div class="homebox three">
			<a href="http://fundingowl.ca/programs/capital/">
				<h4>Capital Acquisitions</h4>
			</a>
		</div>
		<div class="homebox four">
			<a href="http://fundingowl.ca/programs/export/">
				<h4>Export</h4>
			</a>
		</div>
		<div class="homebox five">
			<a href="http://fundingowl.ca/programs/innovation/">
				<h4>Innovation</h4>
			</a>
		</div>
		<div class="homebox six">
			<a href="http://fundingowl.ca/programs/research/">			
				<h4>Research</h4>
			</a>
		</div>
	</div>
	<h1><a href="http://fundingowl.ca/funding-programs/">Search for more funding programs</a></h1>
	</section>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

	</section>

<?php get_footer(); ?>