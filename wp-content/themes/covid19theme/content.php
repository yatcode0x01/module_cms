<div class="column" href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
    <a href="<?php the_permalink(); ?>" class="card-title"><?php the_title(); ?></a>
    <a href="<?php the_permalink(); ?>" class="card-description"><?php echo get_the_excerpt(); ?></a>
    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="card-author">@<?php the_author(); ?></a>
    <div class="card-category">
        <?php
        $category = get_the_category(get_the_ID());
        if (count($category) > 1) {
            echo '<a href="http://127.0.0.1:8080/category/' . $category[0]->slug . '/" rel="category tag">' . $category[0]->name . '</a>';
        } else {
            the_category();
        }
        ?>
    </div>
</div>