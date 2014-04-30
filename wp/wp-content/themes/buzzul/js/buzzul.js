jQuery(function(){
		var i=0;
		jQuery('#sub .ranking').find('article').each(function(){
      jQuery(this).prepend('<p class="num">'+(i+1)+'</p>');
      i++;
		});
});