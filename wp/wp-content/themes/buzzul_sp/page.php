<?php get_header(); ?>
<div id="contents" class="clearfix">
  <div id="page">
    <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <article class="box">
      <h1 class="title"><?php the_title(); ?></h1>
      <div class="article-body"><?php the_content(); ?></div>
    </article>
    <?php endwhile; endif; ?>
  <!--/#page--></div>
<!--/#contents--></div>
<?php get_footer(); ?>