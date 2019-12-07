<?php
/*
the file
*/
?>

<?php get_template_part( 'template-parts/custom', 'header' ); ?>

<section id="primary" class="content-area">
		<main id="main" class="site-main">

    <section id="blog" class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2><?php the_title(); ?></h2>
                        <div class="line"><img src="<?php  echo get_site_icon_url() ?>" alt=""></div>
                    </div>
                </div>
            </div>

			<!-- Start the Loop -->
			<?php while ( have_posts() ) :
				the_post(); ?>

				<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'saybers' ),
				'after'  => '</div>',
			)
		); ?>
	           </div>
            <?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; ?> <!-- End of the loop. -->

        </div>
</section>
		</main><!-- #main -->
</section>

<?php get_footer(); ?>
