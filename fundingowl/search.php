<?php get_header(); ?>
    <section class="default-hero">
        <figure class="default-hero__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/dist/images/search.jpg'); background-size: cover;">
        </figure>
        <div class="color-overlay">
            </div>
        <div class="main-wrapper">
            <hgroup>
                <h3>
                    You searched for:
                </h3>
                <h2 id="fade-in-item" class="animated fadeInDown">
                    <?php echo get_search_query(); ?>
                </h2>
            </hgroup>
        </div>
    </section>

    <div class="archive-default">
        <main>
            <div class="content-wrapper">

                <?php if ( have_posts() ) : ?>
                        
                        <!-- <p><span class="text--bold">Results for</span>:  <?php //single_tag_title(); ?>  </p> -->

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
                        <div class="no-search-results">
                            <?php _e( 'Sorry, no posts matched your criteria. Try another search!' );
                            get_search_form();
                            endif;?>
                        </div>
                <p><?php echo paginate_links( $args ); ?></p>
            </div>
        </main><!-- .site-main -->
    </div>

<?php get_footer(); ?>