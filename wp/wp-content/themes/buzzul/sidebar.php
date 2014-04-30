<div id="sub">
  <div class="social-area box">
    <h2>バズールをフォロー！</h2>
    <div class="twitter-btn">
      <a href="https://twitter.com/buzzulnet" class="twitter-follow-button" data-show-count="false" data-lang="ja" data-size="large">@buzzulnetさんをフォロー</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
    <div class="fb-likebox">
      <div class="fb-like-box" data-href="https://www.facebook.com/buzzulnet/" data-width="296" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
    </div>
  </div>
  <div class="ranking box">
    <h2>ランキング</h2>
    <?php if (function_exists('wpp_get_mostpopular')) {
        $args = 'limit=10&
        range=daily&
        order_by=views&
        thumbnail_width=634&
        thumbnail_height=476&
        post_type="post"&
        stats_category=1&
        post_html="<article>{thumb}<div class=\'post-info\'><div class=\'meta\'><div class=\'view\'>{views}</div></div><h1 class=\'title\'><a href=\'{url}\'>{text_title}</a></h1></div></article>"&
        wpp_start=" "&
        wpp_end=" "&
        stats_comments=0'
        ;
        wpp_get_mostpopular($args);
      }?>
  </div>
  <?php if(is_single()): ?>
  <div class="recent box">
    <h2>最新記事</h2>
    <?php
      $args = array(
        'post_type'=> 'post',
        'paged'=> $paged,
        'posts_per_page'=> 16
      );
    ?>
    <?php query_posts($args); ?>
    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
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
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
  </div>
  <?php endif; ?>
<!--/#sub--></div>