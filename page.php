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
				the_post(); ?>

				<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'saybers' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section>

<?php get_footer(); ?>