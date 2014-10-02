jQuery(document).ready(function($){
	$('nav li').click(function(){
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
					data:{page:clicked_elem.attr('data-page')},
					success:function(data){
						$('section').slideUp('slow',function(){
							$('section').slideDown('slow');
							$('section').html(data);
						});
					}
				});
			}else{
				top_nav -= move_pixels;
			}
			
			nav.offset({top:top_nav});
		},10);
	});
	$(document).on('click','button#add_new_user',function(){
		$('#new_user').show();
	});
	$(document).on('click','button.close_window',function(){
		$(this).parents('.popup_window').hide();
	});
	$(document).on('click','button.submit',function(){
		var the_form = $(this).parent('form');
		var data = {page:the_form.attr('action'),form_data:new Object()};
		the_form.children('input,select,textarea').each(function(){
			var this_elem = $(this);
			data['form_data'][this_elem.attr('id')] = this_elem.val();
		});
		$.ajax({
			url:'switch.php',
			type:the_form.attr('method'),
			data:data,
			success:function(data){
				the_form.parents().children('.return_value').html(data);
			}
		});
	});
});