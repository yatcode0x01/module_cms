<?php get_header(); ?>
<div class="container">
    <h4>
        <div class="text-600">Archive Of</div>
        <?php echo get_the_archive_title(); ?>
    </h4>
    <div class="devider"></div>
    <div class="row">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                if ($post->post_type == 'page') {
                    continue;
                }
        ?>
                <div class="column" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                    <a href="<?php the_permalink(); ?>" class="card-title"><?php the_title(); ?></a>
                    <a href="<?php the_permalink(); ?>" class="card-description"><?php echo get_the_excerpt(); ?></a>
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="card-author"><?php the_author(); ?></a>
                    <div class="card-category">
                        <?php the_category(', '); ?>
                    </div>
                </div>
            <?php
            }
            ?>

        <?php
        } else {
            echo '
                <div class="text-center">
                    <h4 class="search-false mt-4">Search Result Not Found</h4>
                </div>';
        }
        ?>
    </div>
</div>
<?php get_footer(); ?>