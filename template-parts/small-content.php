<?php
/*

*/
?>
<div class="col-md-4 col-sm-6">
                    <div class="single-blog">
                        <div class="blog-img">
                            <a href="<?php the_permalink() ?>" data-toggle="modal">
                                <?php the_post_thumbnail('homepage-thumb') ?>
                            </a>
                        </div>
                        <div class="blog-content">
                            <a href="<?php the_permalink() ?>" data-toggle="modal">
                                <h3 class="subtitle"><?php the_title() ?></h3>
                            </a>
                            <?php if(is_archive()) : ?>
                                <h5 class="date"><?php the_date(); ?></h5> <!--add date if archive-->
                            <?php endif; ?>
                            <?php the_excerpt() ?>
                            <a class="btn" href="<?php the_permalink() ?>" data-toggle="modal">Read More</a>
                        </div>
                    </div>
                </div>
