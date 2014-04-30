<?php get_header(); ?>
<div id="contents" class="clearfix">
  <div id="single">
    <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <article class="box">
      <h1 class="title"><?php the_title(); ?></h1>
      <div class="article-body"><?php the_content(); ?></div>
      <div class="meta">
        <time datetime="<?php the_time('Y.m.d H:i:S'); ?>"><?php the_time('Y.m.d'); ?></time>
        <div class="cat"><?php the_category()?></div>
        <blockquote>引用：<?php echo post_custom('quote'); ?></blockquote>
      </div>
    </article>
    <?php endwhile; endif; ?>
  </div>
  <?php related_posts(); ?>
  <?php comments_template(); ?>
  <div class="post-nav">
    <?php
      $prev_post = get_previous_post();
      $next_post = get_next_post();
      if( $next_post || $prev_post ) :
    ?>
    <?php if( $next_post  ) : ?>
    <div class="next box"><?php next_post_link('%link', '次の記事へ', false); ?></div>
    <?php endif; ?>
    <?php if( $prev_post) : ?>
    <div class="prev box"><?php previous_post_link('%link', '前の記事へ', false); ?></div>
    <?php endif; ?>
    <?php endif; ?>
  </div>
  <?php SocialButton(); ?>
<!--/#contents--></div>
<?php get_footer(); ?>