jQuery(function(){
	jQuery('.search-open-btn').click(function(){
		jQuery('#search-area').toggleClass('open-search-area');
		jQuery(this).find('p').toggleClass('open');
	});
	jQuery('.tab-menu').on('click','li:not(".current")',function(){
		var select = jQuery(this).attr('class');
		jQuery('.tab-menu').find('.current').removeClass('current');
		jQuery(this).addClass('current');
		jQuery('.tab-menu + .article-list').children('div:visible').fadeOut('fast',function(){
			jQuery('.tab-menu + .article-list').children('div.'+select).fadeIn('fast');
		});
	});
	jQuery('#pickup-list').find('.pickup-more-btn').click(function(){
		jQuery(this).css('display','none');
		jQuery('.sub-pickup').fadeIn();
	});
	var i=0;
	jQuery('.ranking').find('article').each(function(){
   	jQuery(this).prepend('<p class="num">'+(i+1)+'</p>');
   	i++;
	});
});