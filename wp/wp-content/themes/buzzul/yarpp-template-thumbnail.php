<?php /*
YARPP Template: thumbnail template
Description:xl style template
Author: buzzul
*/ ?>
<div class="article-list">
<?php if (have_posts()): ?>
<?php while(have_posts()) : the_post(); ?>
  <article class="box">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(296,296),array('class'=>'thumbnail')); ?></a>
    <div class="meta">
      <time datetime="<?php the_time('Y.m.d H:i:S'); ?>"><?php the_time('Y.m.d'); ?></time>
      <div class="cat"><?php the_category(',')?></div>
    </div>
    <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  </article>
<?php endwhile; ?>
<?php else: ?>
<div class="none">
  <p>この動画に関連する記事は準備中ですm(_ _)m</p>
</div>
<?php endif?>
</div>
