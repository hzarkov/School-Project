jQuery(document).ready(function($){
	$('ul#choose_language > li').click(function(){
		document.cookie="Language="+$(this).attr('data-language');
		$.ajax({
			url:'switch.php',
			type: 'GET',
			data:{page:'header-menu'},
			success:function(data){
				$('header>nav').html(data);
			}
		});
		$('section>button#refresh').trigger('click');
	});
	$('section>button#refresh').click(function(){
		$.ajax({
			url:'switch.php',
			type: 'GET',
			data:{page:$(this).val()},
			beforeSend:function(){
				$('section>#section_content').html('');
			},
			success:function(data){
				$('section>#section_content').html(data);
			}
		});
	});
	$(document).on('click','nav li',function(){
		var clicked_elem = $(this);
		var nav = clicked_elem.parents('nav');
		var top_nav = nav.position().top;
		var timerId = setInterval(function (){
			var move_pixels = 10;
			if(top_nav <= 70){
				clearInterval(timerId);
				$('section').css('top',top_nav+nav.height());
				var slide_up_section = false;
				$.ajax({
					url:'switch.php',
					type: 'GET',
					data:{page:"modules_"+clicked_elem.attr('data-page')},
					success:function(data){
						$('section').slideUp('slow',function(){
							$('section').slideDown('slow');
							$('section>#section_content').html(data);
							$('section>button#refresh').val("modules_"+clicked_elem.attr('data-page'));
							var js_file = 'JS/'+clicked_elem.attr('data-page').split('_').slice(-1)+'.js';
							if($('script[src="'+js_file+'"]').length <= 0){
								$('head').append('<script src="'+js_file+'"></script>')
							}
							var css_file = 'CSS/'+clicked_elem.attr('data-page').split('_').slice(-1)+'.css';
							if($('link[href="'+css_file+'"]').length <= 0){
								$('head').append('<link rel="stylesheet" type="text/css" href="'+css_file+'">')
							}
						});
					}
				});
			}else{
				top_nav -= move_pixels;
			}
			
			nav.offset({top:top_nav});
		},10);
	});
	$(document).on('click','button.close_window',function(){
		$(this).parents('.popup_window').hide();
		$('section>button#refresh').trigger('click');
	});
});