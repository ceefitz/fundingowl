<?php
/*
	Template Name: Left Sidebar
*/
?>

<?php if ( is_front_page() && is_home() ){
echo get_template_part( 'header', 'custom' );}
else {
echo get_header('blog'); } ?>

	 <section class="mainBlog">
        <div class="primary">

             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

		      <article class="post">
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

                </ul>
                <?php if( get_the_post_thumbnail() ) : ?>
                <div class="img-container">
                  <?php the_post_thumbnail('large'); ?>
                </div>
                <div class="excerpt">
                  <h2><?php echo strip_tags( get_the_excerpt() ); ?></h2>
                  <div class="button">
                    <a href="<?php the_permalink(); ?>">Read More</a> 
                  </div>
                </div>
                <hr>
                <?php endif; ?> 
              </article> 
          <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
          <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>  
			
			<?php endwhile; else : ?>
			
			  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
			
			<?php endif; ?>

       	</div>
        <div class="secondary">
        <?php get_sidebar(); ?>
        </div>

    </section>



<?php get_footer(); ?>