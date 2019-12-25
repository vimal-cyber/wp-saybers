<!--Footer Area Starts-->
<footer>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 side">
                    <?php if(is_active_sidebar('sidebar-2')) : ?>
                    <?php dynamic_sidebar('sidebar-2'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-xs-4 side">
                    <?php if(is_active_sidebar('sidebar-3')) : ?>
                    <?php dynamic_sidebar('sidebar-3'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-xs-4 side-l">
                    <?php if(is_active_sidebar('sidebar-1')) : ?>
                    <?php dynamic_sidebar('sidebar-1'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-12 text-center">
                    <p><?php echo get_theme_mod( 'foot_text', '&copy; 2019 All Rights Reserved' ) ?></p>
                </div>
            </div>
        </div>
    </div>

</footer>

<!--footer ends-->


<?php wp_footer() ?>
</body>

</html>
