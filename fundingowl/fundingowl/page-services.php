<?php if ( is_front_page() && is_home() ){
echo get_template_part( 'header', 'custom' );}
else {
echo get_header(); } ?>

	<section class="topBlurb">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<p><?php the_content(); ?></p>  

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

	</section>
	     <ul id="services" class="dashed-features">
          <li class="dashed-features-item">
            <div class="copy-icon copy-icon-first">
              <img src="http://fundingowl.ca/wp-content/uploads/2016/06/dotted-1b.png" alt="Dotted 1">
            </div>
            <div class="dashed-features-item-copy dashed-features-item-copy-first">
              <h2><?php the_field('box_four_header'); ?></h2>
              <?php the_field('box_four'); ?>
            </div>
          </li>
          <li class="dashed-features-item">
            <div class="copy-icon copy-icon-second">
              <img src="http://fundingowl.ca/wp-content/uploads/2016/06/dotted-2b-1.png" alt="Dotted 2">
            </div>
            <div class="dashed-features-item-copy dashed-features-item-copy-second">
              <h2><?php the_field('box_two_header'); ?></h2>
              <?php the_field('box_two'); ?>
            </div>
          </li>
          <li class="dashed-features-item">
            <div class="copy-icon copy-icon-third"></div>
            <div class="dashed-features-item-copy dashed-features-item-copy-third">
              <h2><?php the_field('box_three_header'); ?></h2>
              <?php the_field('box_three'); ?>
            </div>
          </li>
        </ul>

<?php get_template_part('content', 'cta'); ?>

<?php get_footer(); ?>