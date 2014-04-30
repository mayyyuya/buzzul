<?php get_header(); ?>
<div id="contents" class="clearfix">
  <div id="pankuzu">
    <ul>
      <li><span>ホーム</span></li>
    </ul>
  </div>
  <div id="pickup-list" class="box">
    <h2>ピックアップ</h2>
    <?php
      $pickupIdGet = array(
        'post_type'=> 'pickup',
        'paged'=> $paged,
        'posts_per_page'=> 6
      );
    ?>
    <?php query_posts($pickupIdGet); ?>
    <?php if(have_posts()): $pickupID = array(); ?>
    <?php while(have_posts()): the_post(); ?>
      <?php 
        array_push($pickupID, get_the_title());
      ?>
    <?php endwhile; ?>
      
    <?php endif;?>
    <?php wp_reset_query(); ?>
    <?php
      $pickup = array(
        'post_type'=> 'post',
        'paged'=> $paged,
        'posts_per_page'=> 6,
        'post__in'=> $pickupID,
        'orderby'=> 'rand'
      );
    ?>
    <?php query_posts($pickup); ?>
    <?php if(have_posts()): $i=1; ?>
    <div class="main-pickup">
    <?php while(have_posts()): the_post(); ?>
      <?php if($i==1):?>
        <article>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(634,634),array('class'=>'thumbnail')); ?></a>
        <div class="meta">
          <time datetime="<?php the_time('Y.m.d H:i:S'); ?>"><?php the_time('Y.m.d'); ?></time>
          <div class="cat"><?php the_category(',')?></div>
        </div>
        <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </article>
        </div>
        <div class="sub-pickup">
      <?php else: ?>
        <article>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(sThumb,array('class'=>'thumbnail')); ?></a>
        <div class="post-info">
          <div class="meta">
            <time datetime="<?php the_time('Y.m.d H:i:S'); ?>"><?php the_time('Y.m.d'); ?></time>
            <div class="cat"><?php the_category(',')?></div>
          </div>
          <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        </div>
      </article>
      <?php endif;?>
    <?php $i++; endwhile; ?>
    </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
  <!--/#pickup-list--></div>
  <div id="main">
    <h2>バズール新着記事</h2>
    <?php
      $args = array(
        'post_type'=> 'post',
        'paged'=> $paged,
        'posts_per_page'=> 16
      );
    ?>
    <?php query_posts($args); ?>
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