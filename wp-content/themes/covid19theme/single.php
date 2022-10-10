<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
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

                    $args = array(
                        'status' => 'approve',
                        'post_id' => get_the_ID()
                    );
                    $comments_query = new WP_Comment_Query($args);
                    $comments = $comments_query->comments;
                    ?>
                    <?php comment_form(); ?>
                    <div class="all-comment">
                        <h4>
                            <div class="text-600">All</div>
                            Comments
                        </h4>
                        <div class="devider"></div>
                        <?php
                        if (count($comments) == 0) {
                            echo '
                                <div class="text-center">
                                    <h4 class="search-false mt-4">Not Have A Comment</h4>
                                </div>';
                        }
                        foreach ($comments as $comment) {
                        ?>
                            <div class="comment-item">
                                <div class="comment-image">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 38); ?>
                                </div>
                                <div class="comment-user"><?php echo $comment->comment_author; ?></div>
                                <div class="comment-value"><?php echo $comment->comment_content; ?></div>
                            </div>
                <?php
                        }
                    }
                }
                ?>
                    </div>
        </div>
        <div class="col-sm-4" style="padding-left: 20px;padding-top: 5px;">
            <h4>
                <div class="text-600">Popular</div>
                Post
            </h4>
            <div class="devider"></div>
            <div class="row">
                <?php
                $recent_event = new WP_Query('cat=4&posts_per_page=10&orderedby=comment_count');
                if ($recent_event->have_posts()) {
                    while ($recent_event->have_posts()) :
                        $recent_event->the_post();
                ?>
                        <div class="popular-post">
                            <div class="image-post">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="title-post"><?php the_title(); ?></a>
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author-post">@<?php the_author(); ?></a>
                        </div>
                <?php
                    endwhile;
                } else {
                    echo 'Not Have Posts!';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>