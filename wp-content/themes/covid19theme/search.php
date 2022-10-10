<?php get_header(); ?>
<div class="container">
    <h4>
        <div class="text-600">Results For</div>
        Post
    </h4>
    <div class="devider"></div>
    <div class="row">
        <?php
        if (have_posts()) {
            if (isset($_GET['s'])) {
                if (empty($_GET['s'])) {
                    echo '
                    <div class="text-center">
                        <h4 class="search-false mt-4">Search Result Not Found</h4>
                    </div>';
                } else {
                    while (have_posts()) {
                        the_post();
                        if ($post->post_type == 'page') {
                            continue;
                        }
                        get_template_part('content');
                    }
                }
                ?>

        <?php
            }
        } else {
            echo '
                <div class="text-center">
                    <h4 class="search-false mt-4">Search Result Not Found</h4>
                </div>';
        }
        ?>
    </div>
</div>

<div class="container">
    <h4>
        <div class="text-600">Results For</div>
        Pages
    </h4>
    <div class="devider"></div>
    <div class="row">
        <?php
        if (have_posts()) {
            if (isset($_GET['s'])) {
                if (empty($_GET['s'])) {
                    echo '
                        <div class="text-center">
                            <h4 class="search-false mt-4">Search Result Not Found</h4>
                        </div>';
                } else {
                    while (have_posts()) {
                        the_post();
                        if ($post->post_type != 'page') {
                            continue;
                        }
        ?>
                        <div class="column" style="border-radius: 10px;width: 49%;margin-right: 1%;height: auto;box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;" href="<?php the_permalink(); ?>">
                            <a href="<?php the_permalink(); ?>" class="card-title"><?php the_title(); ?></a>
                            <a href="<?php the_permalink(); ?>" class="card-description"><?php echo get_the_excerpt(); ?></a>
                        </div>
                <?php
                    }
                }
                ?>

        <?php
            }
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