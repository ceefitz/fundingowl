<?php get_header(); ?>
    <section class="default-hero">
        <figure class="default-hero__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/search.jpg'); background-size: cover;">
        </figure>
        <div class="color-overlay">
        </div>
        <div class="main-wrapper">
            <hgroup>
                <h3>
                    Results for:
                </h3>
                <h2 id="fade-in-item" class="animated fadeInDown">
                    <?php single_month_title(' '); ?>
                </h2>
            </hgroup>
        </div>
    </section>

    <div class="archive-default">
        <main>
            <div class="content-wrapper">

                <?php if ( have_posts() ) : ?>

                        <?php
                        // Start the loop.
                        while ( have_posts() ) : the_post(); ?>

                            <section class="archive-panel">
                                <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                                <h3>
                                    <a href="<?php the_permalink(); ?> ">
                                    <?php the_title( ); ?>
                                    </a>
                                </h3>
                                <div>
                                    <?php the_excerpt(); ?>
                                </div>
                            </section>
                            
                            <?php
                    
                        endwhile;
                    
                    // If no content, include the "No posts found" template.
                    else : ?>
                        <?php _e( 'Sorry, no posts matched your criteria.' );
                    
                endif;?>
                <p><?php echo paginate_links( $args ); ?></p>
            </div>
        </main><!-- .site-main -->
    </div>

<?php get_footer(); ?>