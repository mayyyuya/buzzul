<?php
add_theme_support( 'post-thumbnails' );
add_image_size('sThumb',120,90);
add_action('init','pickup_post');
add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');
add_filter('pre_comment_author_name', 'my_pre_comment_author_name');
add_filter( "comment_form_default_fields","my_comment_form_fields");

function pickup_post(){
	register_post_type('pickup',
		array(
			'labels' => array(
				'name'=>__('ピックアップ'),
				'singular_name' => __('ピックアップ')	
			),
			'public'=> true,
			'menu_position'=>10,
			'supports' => array('title')
		)
	);
}

function rss_post_thumbnail($content) {
	global $post;
	if(has_post_thumbnail($post->ID)) {
		$content = '<p>'.get_the_post_thumbnail($post->ID).'</p>'.get_the_content();
	}
	return $content;
}

function my_pre_comment_author_name($name){
	$user = wp_get_current_user();
	if($user->ID && isset($_POST['author']))
		$name = trim(strip_tags($_POST['author']));
	return $name;
}

function my_comment_form_fields( $fields){
    unset( $fields['url']);
    return $fields;
}

function SocialButton(){ ?>
<div class="btn-list">
   <ul>
     <li class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>｜バズール" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;" rel="nofollow">Facebook<span>でシェア</span></a></li>
     <li class="twitter"><a target="_blank" href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>｜バズール&via=buzzulnet&related=buzzulnet&hashtags=#バズール">twitter<span>でツイート</span></a></li>
     <li class="hatebu"><a href="<?php the_permalink();?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple" title="このエントリーをはてなブックマークに追加">はてブ<span>する</span></a><script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script></li>
   </ul>
</div>
<?php }; ?>