<?php
/*
Template Name: Search Page
*/
?>
<?php get_template_part( 'template-parts/custom', 'header' ); ?>
<!--Archive-->
<section id="blog" class="blog-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2>Search Results</h2>
                    <div class="line"><img src="<?php  echo get_site_icon_url() ?>" alt=""></div>
                    <p class="sub-head"><?php printf( __( 'Search Results for : %s', 'saybers' ), '<span>' . get_search_query() . '</span>' ); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                if ( have_posts() ) {
                   while ( have_posts() ) {
                      the_post();
                      // Post Content here
                       get_template_part('template-parts/small', 'content');
                    } // end while
                } // end if
                wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="pagination">
            <?php echo paginate_links(); ?>
    </div>
</section>

<?php get_footer(); ?>
