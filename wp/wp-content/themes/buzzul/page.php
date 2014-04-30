<?php get_header(); ?>
<div id="contents" class="clearfix">
  <div id="pankuzu">
    <ul>
      <li><a href="<?php echo home_url(); ?>">ホーム</a>&gt;</li>
      <li><span><?php the_title(); ?></span></li>
    </ul>
  </div>
  <div id="main">
    <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <article id="page" class="box">
      <h1><?php the_title(); ?></h1>
      <div class="article-body">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile; endif; ?>
  <!--/#main--></div>
<?php get_sidebar(); ?>
<!--/#contents--></div>
<?php get_footer(); ?>