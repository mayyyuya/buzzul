<?php get_header(); ?>
<div id="contents" class="clearfix">
  <div id="pankuzu">
    <ul>
      <li><a href="<?php echo home_url(); ?>">ホーム</a>&gt;</li>
      <li><span>カテゴリー：<?php the_category(',');?></span></li>
    </ul>
  </div>
  <div id="main">
    <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <article id="single" class="box">
      <h1><?php the_title(); ?></h1>
      <div class="article-body">
      <?php the_content(); ?>
    </div>
      <div class="social-btn">
        <?php SocialButton(); ?>
      </div>
      <div class="meta">
        <time datetime="<?php the_time('Y.m.d H:i:S'); ?>"><?php the_time('Y.m.d'); ?></time>
        <div class="cat"><?php the_category(',')?></div>
        <blockquote>引用：<a href="<?php echo post_custom('quote-url'); ?>" target="_blank"><?php echo post_custom('quote-text'); ?></a></blockquote>
      </div>
    </article>
    <h2>この記事を見た人に人気の動画</h2>
    <?php related_posts(); ?>
    <?php comments_template(); ?>
    <div class="social-btn box">
      <h3>この記事をみんなにシェア！</h3>
      <?php SocialButton(); ?>
    </div>
    <div class="post-nav">
      <?php
      $prev_post = get_previous_post();
        $next_post = get_next_post();
        if( $next_post || $prev_post ) :
      ?>
      <?php if( $next_post  ) : ?>
          <div class="next box">
            <?php next_post_link('%link', '%title', false); ?>
          </div>
      <?php endif; ?>
      <?php if( $prev_post) : ?>
          <div class="prev box">
            <?php previous_post_link('%link', '%title', false); ?>
          </div>
      <?php endif; ?>
      <?php endif; ?>
    </div>
    <?php endwhile; endif; ?>
  </div>
<?php get_sidebar(); ?>
<!--/#contents--></div>
<?php get_footer(); ?>