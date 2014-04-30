<footer id="g-footer"<?php wp_reset_query(); ?><?php if(is_single()): ?> class="single-footer"<?php endif; ?>>
  <div class="follow-area">
    <div class="twitter-btn">
      <a href="https://twitter.com/buzzulnet" class="twitter-follow-button" data-show-count="false" data-lang="ja" data-size="large">@buzzulnetさんをフォロー</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
    <div class="fb-likebox">
      <div class="fb-like-box" data-href="https://www.facebook.com/buzzulnet" data-width="304" data-height="200" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
    </div>
  </div>
  <div class="gotop"><a href="#pagetop">ページ上部へ戻る</a></div>
  <nav class="footer-nav">
    <ul>
      <li><a href="<?php echo home_url(); ?>/about">このサイトについて</a></li>
      <li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
    </ul>
  </nav>
  <small class="copyright">バズール ©2014</small>
</footer>
<?php wp_footer(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=1447564335488711";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>