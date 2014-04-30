<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
  <title><?php if(is_single()||is_page()): ?><?php the_title(); ?>｜<?php elseif(is_category()): ?><?php $cat_info = get_category( $cat ); echo wp_specialchars( $cat_info->name ); ?>の動画・画像一覧｜<?php endif; ?>バズール</title>
  <meta name="description" content="動画・画像バズール" />
  <meta name="keyword" content="バズール,2ch,動画,画像" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="バズール" />
  <meta property="og:url" content="<?php if(is_single()){the_permalink();}else{echo "http://5103nn.sakura.ne.jp/buzzul/";} ?>" />
  <meta property="og:title" content="<?php if(is_single()): ?><?php the_title(); ?>｜バズール<?php else: ?>｜バズール<?php endif; ?>">
  <meta property="og:description" content="動画・画像バズール" />
  <meta property="og:image" content="<?php if(is_single()): ?><?php $thumbnail_id = get_post_thumbnail_id($post->ID); $image = wp_get_attachment_image_src( $thumbnail_id, 'full' ); $src = $image[0]; echo $src; ?><?php else: ?><?php bloginfo('template_directory'); ?>/img/og_logo.png<?php endif;?>" />
  <meta property="fb:app_id" content="1447564335488711" />
  <meta name="author" content="buzzul" />
  <meta name="copyright" content="buzzul" />
  <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo home_url(); ?>/feed" />
  <link href="<?php bloginfo('template_directory'); ?>/css/normalize.css" rel="stylesheet" />
  <link href="<?php bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/buzzul.js"></script>
</head>
<body id="pagetop">
<header id="g-header" class="clearfix">
  <div id="search-area">
    <h3>人気のカテゴリー</h3>
    <nav id="g-nav">
      <ul class="popular-cat">
        <li><a href="">驚き</a></li>
        <li><a href="">なごむ</a></li>
        <li><a href="">刺さる</a></li>
        <li><a href="">笑う</a></li>
      </ul>
      <form action="<?php echo home_url(); ?>/" method="get">
        <?php
            $select = wp_dropdown_categories('show_option_none=カテゴリー一覧&show_count=1&orderby=name&echo=0');
            $select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
            echo $select;
        ?>
        <noscript><input type="submit" value="View" /></noscript>
      </form>
    </nav>
    <div class="search-form">
    <div class="inner">
      <form action="<?php echo home_url(); ?>" method="get">
        <div class="text"><div class="text"><input id="s" name="s" type="text" placeholder="見たい動画のキーワード"></div></div>
        <div class="btn"><input id="sbutton" class="btn" type="submit" value=""></div>
      </form>
      </div>
    </div>
  </div>
  <div class="wrapper">
      <h1 class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="バズール" width="125" height="28" /></a></h1>
    <div class="search-open-btn">
      <p>記事を検索</p>
    </div>
  </div>
<!--/#header--></header>