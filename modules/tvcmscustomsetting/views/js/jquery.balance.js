(function(a){a.fn.balance=function(b){var c={set_height:false,same_height:true,same_width:false,limit_height:false,limit_width:false,max_height:100,max_width:100};var b=a.extend(c,b);$maxheight=$maxwidth=0;$class=a(this);$class.each(function(){$maxheight=parseFloat(a(this).height())>$maxheight?a(this).height():$maxheight;$maxwidth=parseFloat(a(this).width())>$maxwidth?a(this).width():$maxwidth});if(b.same_height){$maxheight=b.limit_height?(b.max_height<=$maxheight?b.max_height:$maxheight):$maxheight;if(b.set_height){$class.css({height:$maxheight+"px"})}else{$class.css({"min-height":$maxheight+"px"})}}if(b.same_width){$maxwidth=b.limit_width?(b.max_width<=$maxwidth?b.max_width:$maxwidth):$maxwidth;$class.width($maxwidth)}}})(jQuery);