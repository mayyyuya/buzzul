<?php
if ($comments){
foreach ($comments as $comment){
  if($comment->comment_type == "trackback"){
  $responses[trackback][] = $comment;
  }
  elseif($comment->comment_type == "pingback"){
  #$responses[pingback][] = $comment;
  $responses[trackback][] = $comment;
  }
  else{
  $responses[comment][] = $comment;
  }
}
unset($comments);
$comments   = $responses[comment];
$trackbacks = $responses[trackback];
#$pingbacks = $responses[pingback];
}
?>
<div id="comment" class="box">
  <h2>コメント</h2>
  <div class="cm-list">
    <?php if($comments): ?>
    <ul>
      <?php $i=1; foreach ($comments as $comment) : ?>
      <li>
        <div class="meta"><?php echo $i; ?>.<?php comment_author_link(); ?><span><?php comment_date('Y.m.d H:i'); ?></span></div>
        <div class="body"><?php comment_text(); ?></div>
      </li>
      <?php $i++; endforeach; ?>
    </ul>
    <?php else: ?>
    <p class="none">コメントはまだありません。</p>
    <?php endif; ?>
  </div>
  <div class="cm-form">
    <form method="post" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php">
      <input type="text" name="author" placeholder="名無し" value="名無し" />
      <textarea name="comment" id="cm" placeholder="本文"></textarea>
      <input name="submit" type="submit" id="send" value="コメントを投稿" />
      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" id="cm_send"/>
      <?php do_action('comment_form', $post->ID); ?>
    </form>
  </div>
</div>