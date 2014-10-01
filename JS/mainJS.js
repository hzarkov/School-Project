jQuery(document).ready(function($){
	$('nav li').click(function(){
		var go_down = true;
		function menu_move(){
			var move_pixels = 10;
			if(!$('section').is(':hidden') && go_down){
				top_nav += move_pixels;
			}
			else if(top_nav <= 70){
				clearInterval(timerId);
				$('section').css('top',top_nav+nav.height());
				$('section').slideDown(400);
			}else{
				top_nav -= move_pixels;
			}
			
			if(top_nav <= 0){
				top_nav = $(document).height();
			}
			if(top_nav+(move_pixels*2) > $('section').height()+$('section').position().top){
				$('section').height(($('section').height()-move_pixels));
				if($('section').height() <= 0){
					$('section').hide();
					$('section').css('height','70%');
				}
				go_down = false;
			}
			nav.offset({top:top_nav});
		}
		var nav = $(this).parents('nav');
		var top_nav = nav.position().top;
		var timerId = setInterval(menu_move,20);
	});
});