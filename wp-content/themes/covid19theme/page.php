<?php get_header(); ?>
<div class="container">
    <div class="col-10">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
                <h1>
                    <a href="#"><?php single_post_title(); ?></a>
                </h1>
        <?php
                the_content();
            }
        }
        ?>
    </div>
    <div class="col-2 bg-dark"></div>
</div>

<?php get_footer(); ?>