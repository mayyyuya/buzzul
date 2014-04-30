<?php get_header(); ?>
<div id="contents" class="clearfix">
  <?php if(!is_paged()): ?>
  <div id="pickup-list">
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
    <h2>ピックアップ</h2>
    <div class="article-list">
       <?php while(have_posts()): the_post(); ?>
       <?php if($i==1):?>
       <div class="main-pickup"> 
         <article class="box">
           <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
           <div class="meta">
             <time datetime="<?php the_time('Y.m.d H:i:S'); ?>"><?php the_time('Y.m.d'); ?></time>
             <div class="cat"><?php the_category(); ?></div>
           </div>
           <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
         </article>
       </div>
       <div class="pickup-more-btn">ピックアップを全て見る</div>
       <div class="sub-pickup">
       <?php else: ?>
         <article class="box">
           <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
           <div class="meta">
             <time datetime="<?php the_time('Y.m.d H:i:S'); ?>"><?php the_time('Y.m.d'); ?></time>
             <div class="cat"><?php the_category(); ?></div>
           </div>
           <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
         </article>
       <?php endif;?>
       <?php $i++; endwhile; ?>
       </div>
       <?php endif; ?>
       <?php wp_reset_query(); ?>
    </div>
  <!--/#pickup-list--></div>
  <?php endif; ?>
  <div id="top-list">
    <?php if(!is_paged()): ?>
    <div class="tab-menu">
      <ul>
        <li class="recent current">新着記事</li>
        <li class="ranking">ランキング</li>
      </ul>
    </div>
    <?php else:?>
    <h2>バズール新着記事</h2>
    <?php endif; ?>
    <div class="article-list">
      <?php
        $args = array(
          'post_type'=> 'post',
          'paged'=> $paged,
          'posts_per_page'=> 16
        );
      ?>
      <?php query_posts($args); ?>
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
      <?php endif; ?>
      <?php if(!is_paged()): ?>
      <div class="ranking">
        <?php if (function_exists('wpp_get_mostpopular')) {
        $args = 'limit=20&
        range=daily&
        order_by=views&
        thumbnail_width=634&
        thumbnail_height=476&
        post_type="post"&
        stats_category=1&
        post_html="<article class=\'box\'>{thumb}<div class=\'meta\'><div class=\'view\'>{views}<span>views</span></div></div><h1 class=\'title\'><a href=\'{url}\'>{text_title}</a></h1></article>"&
        wpp_start=" "&
        wpp_end=" "&
        stats_comments=0'
        ;
        wpp_get_mostpopular($args);
      }?>
      </div>
      <?php endif;?>
    </div>
  <!--/.top-list--></div>
<!--/#contents--></div>
<?php get_footer(); ?>