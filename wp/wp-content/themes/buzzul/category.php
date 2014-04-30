<?php get_header(); ?>
<div id="contents" class="clearfix">
  <div id="pankuzu">
    <ul>
      <li><a href="<?php echo home_url(); ?>">ホーム</a>&gt;</li>
      <li><span>カテゴリー：<?php single_cat_title(); ?></span></li>
    </ul>
  </div>
  <div id="main">
    <h2>カテゴリー「<?php single_cat_title(); ?>」</h2>
    <?php
        global $query_string;
        query_posts($query_string . '&posts_per_page=26&paged='.$paged.'&post_type=post');
    ?>
    <?php if(have_posts()): ?>
    <div class="article-list">
      <?php while(have_posts()): the_post(); ?>
      <article class="box">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(296,296),array('class'=>'thumbnail')); ?></a>
        <div class="meta">
          <time datetime="<?php the_time('Y.m.d H:i:S'); ?>"><?php the_time('Y.m.d'); ?></time>
          <div class="cat"><?php the_category(',')?></div>
        </div>
        <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      </article>
      <?php endwhile; ?>
      <?php wp_pagenavi();?>
    </div>
    <?php endif; ?>
  <!--/#main--></div>
<?php get_sidebar(); ?>
<!--/#contents--></div>
<?php get_footer(); ?>