<!--Footer Area Starts-->
<footer>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="side">
                    <?php if(is_active_sidebar('sidebar-2')) : ?>
                    <?php dynamic_sidebar('sidebar-2'); ?>
                    <?php endif; ?>
                </div>
                <div class="side">
                    <?php if(is_active_sidebar('sidebar-3')) : ?>
                    <?php dynamic_sidebar('sidebar-3'); ?>
                    <?php endif; ?>
                </div>
                <div class="side-l">
                    <?php if(is_active_sidebar('sidebar-1')) : ?>
                    <?php dynamic_sidebar('sidebar-1'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-12 text-center">
                    <p>&copy; 2019 <?php bloginfo('name'); ?> All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>

</footer>

<!--footer ends-->


<?php wp_footer() ?>
</body>

</html>
