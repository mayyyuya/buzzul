<footer id="g-footer">
  <div class="wrapper">
    <small>バズール ©2014</small>
    <nav id="footer-nav">
      <ul>
        <li><a href="<?php echo home_url(); ?>/about">このサイトについて</a></li>
        <li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
      </ul>
    </nav>
  </div>
</footer>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=1447564335488711";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php wp_footer(); ?>
</body>
</html>