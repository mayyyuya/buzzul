<?php get_header(); ?>
<div id="contents" class="clearfix">
  <div class="article-list">
    <h2>キーワード「<?php the_search_query(); ?>」</h2>
    <?php
      global $query_string;
      query_posts($query_string . '&posts_per_page=26&paged='.$paged.'&post_type=post');
    ?>
    <?php if(have_posts()): ?>
    <div class="recent">
      <?php while(have_posts()): the_post(); ?>
      <article class="box">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="meta">
          <time datetime="<?php the_time('Y.m.d H:i:S'); ?>"><?php the_time('Y.m.d'); ?></time>
          <div class="cat"><?php the_category(); ?></div>
        </div>
        <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      </article>
      <?php endwhile; ?>
      <?php wp_pagenavi();?>
    </div>
    <?php else: ?>
    <div class="box none">
      キーワード「<?php the_search_query(); ?>」を含む記事はは無いみたいです。
    </div>
    <?php endif; ?>
  </div>
<!--/#contents--></div>
<?php get_footer(); ?>