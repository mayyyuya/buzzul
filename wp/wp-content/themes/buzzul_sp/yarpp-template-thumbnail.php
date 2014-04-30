<?php /*
YARPP Template: thumbnail template
Description:xl style template
Author: buzzul
*/ ?>

<?php if (have_posts()): ?>
<div class="related-post">
  <h2>こちらもオススメ</h2>
  <div class="article-list-two">
  	 <?php while(have_posts()) : the_post(); ?>
    <article class="box">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
      <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    </article>
    <?php endwhile; ?>
  </div>
</div>
<?php endif?>