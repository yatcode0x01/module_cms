<?php $comment_args = array(
        'comment_notes_after' => '',
        'title_reply' => 'Have something to say?'
      )
?> 
<?php foreach (get_comments($comment_args) as $comment): ?>
    <div class="comment-item">
        <div class="comment-image">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 38 ); ?>
        </div>
        <div class="comment-user"><?php echo $comment->comment_author; ?></div>
        <div class="comment-value"><?php echo $comment->comment_content; ?></div>
    </div>
<?php endforeach; ?>