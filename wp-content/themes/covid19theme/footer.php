<footer>
    <div class="container">
        <div class="row">
            <div class="col-footer-4">
                <a href="<?php bloginfo('url'); ?>" class="navbar-brand-image">
                    <img src="<?php bloginfo('url'); ?>/logo" onerror="this.onerror = null; this.remove();" style="width: 100px; height: 100px;" />
                </a>
                <h4 class="brand-name">Covid 19 Theme</h4>
                <p class="brand-description"><?php echo get_bloginfo('description'); ?></p>
            </div>

            <div class="col-footer-2">
                <div class="head-content">Internal</div>
                <?php
                    $footer = array('theme_location' => 'footer_menu');
                    wp_nav_menu($footer);
                ?>

                <div class="head-content">Social</div>
                <a href="https://fb.com/<?php echo get_option('mdi_facebook'); ?>" class="mdi-plugins">
                    <span class="dashicons dashicons-facebook-alt"></span> <?php echo get_option('mdi_facebook'); ?>
                </a>
                <a href="https://instagram.com/<?php echo get_option('mdi_instagram'); ?>" class="mdi-plugins">
                    <span class="dashicons dashicons-instagram"></span> <?php echo get_option('mdi_instagram'); ?>
                </a>
            </div>

            <div class="col-footer-2">
                <div class="head-content">Category</div>
                <?php
                    $category = array('theme_location' => 'category_footer_menu');
                    wp_nav_menu($category);
                ?>
            </div>

            <div class="col-footer-4">
                <div class="head-content">Address</div>
                <br>
                <?php echo get_option('mdi_address'); ?>
            </div>

        </div>
        <div class="text-center footername">
            Copyright &copy; <?php bloginfo('name');
                    echo " - " . date('Y'); ?>
            All rights reserved
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>