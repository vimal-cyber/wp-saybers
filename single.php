<?php
/*
the file
*/
?>

<?php get_template_part( 'template-parts/custom', 'header' ); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">


			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
            ?>

                    <div id="post-<?php the_ID(); ?>" <?php post_class( 'modal-content fix' ); ?> >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
                                    <?php the_post_thumbnail( ); ?>
                                    <h2><?php the_title(); ?></h2>
                                    <p class="blog-meta text-muted">
                                        <span><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><i class="fa fa-user-circle-o"></i><?php echo get_the_author_meta('display_name'); ?></a></span>
                                        <span><i class="fa fa-comment-o"></i><?php echo get_comments_number(); ?> Comments</span>
                                    </p>
                                    <?php the_excerpt(); ?>
                                <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
				if ( is_singular( 'attachment' ) ) { 
					// Parent post navigation.
					the_post_navigation(
						array(
							/* translators: %s: parent post link */
							'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'saybers' ), '%title' ),
						)
					); 
                        
				} elseif ( is_singular( 'post' ) ) { 
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'saybers' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'saybers' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'saybers' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'saybers' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
						)
					);
				} 

				// If comments are open or we have at least one comment, load up the comment template.
				//if ( comments_open() || get_comments_number() ) {
				//	comments_template();
				//}
              ?>
                </div>

            <?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
